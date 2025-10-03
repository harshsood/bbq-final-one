import os
import requests
from bs4 import BeautifulSoup


# URL of the target website
URL = "https://bbqgasdubai.ae/"
DEST_DIR = "public/images/all"

# Create destination directory if it doesn't exist
os.makedirs(DEST_DIR, exist_ok=True)

# Fetch the page
response = requests.get(URL)
soup = BeautifulSoup(response.text, "html.parser")

# Find all images on the page
img_tags = soup.find_all("img")
img_urls = []
for img in img_tags:
    src = img.get("src")
    if src:
        if src.startswith("//"):  # protocol-relative
            src = "https:" + src
        elif src.startswith("/"):  # site-relative
            src = URL.rstrip("/") + src
        elif not src.startswith("http"):  # relative
            src = URL.rstrip("/") + "/" + src
        img_urls.append(src)

# Remove duplicates
img_urls = list(dict.fromkeys(img_urls))

print(f"Found {len(img_urls)} images. Downloading...")

for url in img_urls:
    filename = os.path.join(DEST_DIR, url.split("/")[-1].split("?")[0])
    try:
        r = requests.get(url, stream=True)
        if r.status_code == 200:
            with open(filename, 'wb') as f:
                for chunk in r.iter_content(1024):
                    f.write(chunk)
            print(f"Downloaded {filename}")
        else:
            print(f"Failed to download {url}")
    except Exception as e:
        print(f"Error downloading {url}: {e}")

print("Done. Images saved to public/images/all/")
