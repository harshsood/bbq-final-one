# Elementor Integration Guide for BBQ Gas Theme

## Making Your WordPress Theme Elementor-Compatible

To make your BBQ Gas theme fully editable with Elementor (free version), follow these steps:

### Step 1: Install Required Plugins

1. **Install Elementor (Free)**
   - Go to Plugins > Add New
   - Search for "Elementor"
   - Install and activate

2. **Install Hello Elementor Theme (Optional)**
   - This provides a clean base for Elementor
   - Or keep your current BBQ Gas theme

### Step 2: Create Elementor Templates

#### Method 1: Convert Existing Pages to Elementor

1. **Edit Homepage with Elementor:**
   ```
   - Go to Pages > Add New
   - Title: "Home"
   - Click "Edit with Elementor"
   - Start building your sections
   ```

2. **Recreate Each Section:**
   - **Hero Section**: Use Elementor's Hero widget
   - **Services**: Use Icon Box or Card widgets
   - **Testimonials**: Use Testimonial Carousel widget
   - **Contact**: Use Form widget

#### Method 2: Use Elementor Theme Builder (Pro Feature)

For full theme control, you'd need Elementor Pro, but here's how to work with the free version:

### Step 3: Elementor-Compatible Code Structure

Add this to your theme's `functions.php`:

```php
// Add Elementor support
function bbq_gas_elementor_support() {
    add_theme_support('elementor');
    add_theme_support('elementor-pro');
}
add_action('after_setup_theme', 'bbq_gas_elementor_support');

// Register Elementor locations
function bbq_gas_register_elementor_locations($elementor_theme_manager) {
    $elementor_theme_manager->register_location('header');
    $elementor_theme_manager->register_location('footer');
    $elementor_theme_manager->register_location('single');
    $elementor_theme_manager->register_location('archive');
}
add_action('elementor/theme/register_locations', 'bbq_gas_register_elementor_locations');
```

### Step 4: Create Custom Elementor Widgets

Create a plugin file `bbq-gas-elementor-widgets.php`:

```php
<?php
/**
 * Plugin Name: BBQ Gas Elementor Widgets
 * Description: Custom Elementor widgets for BBQ Gas theme
 * Version: 1.0.0
 */

// BBQ Gas Services Widget
class BBQ_Gas_Services_Widget extends \Elementor\Widget_Base {
    
    public function get_name() {
        return 'bbq_gas_services';
    }
    
    public function get_title() {
        return 'BBQ Gas Services';
    }
    
    public function get_icon() {
        return 'eicon-posts-grid';
    }
    
    protected function render() {
        // Your services display code here
        $services = get_posts(array(
            'post_type' => 'bbq_service',
            'posts_per_page' => 6
        ));
        
        echo '<div class="bbq-services-grid">';
        foreach ($services as $service) {
            echo '<div class="service-card">';
            echo '<h3>' . $service->post_title . '</h3>';
            echo '<p>' . $service->post_content . '</p>';
            echo '</div>';
        }
        echo '</div>';
    }
}

// Register the widget
function register_bbq_gas_widgets() {
    \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new BBQ_Gas_Services_Widget());
}
add_action('elementor/widgets/widgets_registered', 'register_bbq_gas_widgets');
```

### Step 5: Make Content Editable

#### For Services Section:
1. Create individual service pages
2. Use Elementor's Posts widget to display them
3. Style with Elementor's design options

#### For Testimonials:
1. Create testimonial custom post type (already done)
2. Use Elementor's Testimonial Carousel widget
3. Connect to your testimonial posts

#### For Contact Information:
1. Use Elementor's Text Editor widgets
2. Add dynamic content from customizer
3. Use Elementor's form widgets for contact forms

### Step 6: Page Templates

Create these page templates in your theme:

1. **page-elementor.php** - For Elementor-built pages
2. **single-elementor.php** - For single posts with Elementor
3. **archive-elementor.php** - For archive pages

### Step 7: CSS Integration

Add this CSS to maintain your design:

```css
/* Elementor compatibility */
.elementor-section {
    padding: 60px 0;
}

.elementor-container {
    max-width: 1200px;
}

/* Preserve your color scheme */
.elementor-widget-heading h2 {
    color: #1f2937;
}

.elementor-button {
    background: linear-gradient(135deg, #f97316 0%, #ea580c 100%);
}
```

### Step 8: Content Migration

1. **Export Current Content:**
   - Use WordPress export tool
   - Save your customizer settings

2. **Recreate with Elementor:**
   - Build each section using Elementor widgets
   - Import your content into Elementor sections
   - Style to match your original design

### Step 9: Dynamic Content Setup

Use Elementor's dynamic content features:

```php
// Add custom fields for dynamic content
function bbq_gas_add_custom_fields() {
    if (function_exists('acf_add_local_field_group')) {
        acf_add_local_field_group(array(
            'key' => 'group_bbq_gas_settings',
            'title' => 'BBQ Gas Settings',
            'fields' => array(
                array(
                    'key' => 'field_phone_number',
                    'label' => 'Phone Number',
                    'name' => 'phone_number',
                    'type' => 'text',
                    'default_value' => '+971 58 282 1712',
                ),
                array(
                    'key' => 'field_company_name',
                    'label' => 'Company Name',
                    'name' => 'company_name',
                    'type' => 'text',
                    'default_value' => 'BBQ Gas',
                ),
            ),
            'location' => array(
                array(
                    array(
                        'param' => 'options_page',
                        'operator' => '==',
                        'value' => 'theme-settings',
                    ),
                ),
            ),
        ));
    }
}
add_action('acf/init', 'bbq_gas_add_custom_fields');
```

### Step 10: Final Setup

1. **Set Homepage:**
   - Go to Settings > Reading
   - Set "A static page" as homepage
   - Select your Elementor-built homepage

2. **Configure Menus:**
   - Go to Appearance > Menus
   - Create navigation menu
   - Assign to header location

3. **Test Everything:**
   - Check all pages load correctly
   - Verify Elementor editing works
   - Test responsive design
   - Confirm all content is editable

### Benefits of This Setup:

✅ **Full Content Control** - Edit everything through Elementor
✅ **Visual Editing** - See changes in real-time
✅ **Responsive Design** - Built-in mobile optimization
✅ **Custom Widgets** - BBQ Gas specific components
✅ **Dynamic Content** - Connect to WordPress data
✅ **Professional Design** - Maintain your brand colors and style

This setup gives you the best of both worlds: your professional BBQ Gas design with full Elementor editing capabilities.