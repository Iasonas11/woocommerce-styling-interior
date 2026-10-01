# Styling Interior - Custom WooCommerce E-Shop 🛋️

A fully functional, locally developed e-commerce website built with WordPress and WooCommerce. This project was developed as part of the "e-Business 2025-26" course and focuses on home decor and interior styling. It demonstrates custom PHP logic, advanced store configurations, and industry-standard best practices for security, SEO, and accessibility.

## ✨ Key Features & Technical Implementations

* **Custom Shipping & COD Logic (PHP):** 
  Implemented a custom PHP hook (`woocommerce_cart_calculate_fees`) to dynamically calculate Cash on Delivery (COD) fees based on the shipping zone (€3.50 for Greece, €10.00 for international).
* **Advanced Product Catalog & Filtering:** 
  Configured over 30 products including variable products with custom attributes (e.g., material, dimensions). Implemented native Gutenberg Product Filtering blocks (by Price, Rating, Material, and Category) for a clean, plugin-free filtering experience.
* **Marketing & Sales Integrations:** 
  Configured advanced coupon logic (stackable rules for free shipping and percentage discounts), integrated a dynamic "Smart Slider" for hero banners, and strategically placed promotional display banners.
* **Security & Performance:** 
  Secured the backend by changing the default WordPress admin URL using `WPS Hide Login`. Optimized media delivery and site speed using `Jetpack Site Accelerator`.
* **SEO & Analytics:** 
  Configured on-page SEO using `Yoast SEO` with optimized meta descriptions and titles.
* **Compliance & Accessibility:** 
  Integrated a GDPR Cookie Consent manager and implemented WCAG-friendly accessibility adjustments using `OneTap`.
* **Location API:** 
  Embedded custom HTML/iframe integration of Google Maps on the Contact page.

## 📂 Repository Structure

To keep this repository clean and focused on custom work (rather than core WordPress files), it includes:

* `custom-code/` - Contains the custom PHP snippets (e.g., `custom-cod-fees.php`) demonstrating the dynamic COD fee logic.
* `home-styling-interior/` - The customized WordPress theme folder used for the storefront.
* `screenshots/` - Visual previews of the storefront, filters, checkout logic, and dynamic widgets.
* `database-export.sql` - The complete SQL dump of the database (WordPress core files are intentionally excluded).

## 🚀 How to Run Locally

1. Clone this repository to your local machine.
2. Set up a local environment (e.g., XAMPP, MAMP, Local).
3. Install a fresh copy of WordPress.
4. Import the `database-export.sql` file via phpMyAdmin.
5. Move the folder `home-styling-interior` to your `wp-content/themes/` directory.
6. Note: The custom login URL is `/eshop-admin26/`.

## 📸 Project Previews

![Contact Page & Google Maps Integration](/Users/iasonastsiouramanis/Desktop/My-WooCommerce-Project/Screenshots/contact-details.png)
![Product Filtering](/Users/iasonastsiouramanis/Desktop/My-WooCommerce-Project/Screenshots/product-filtering-searching.png)
![Checkout with Custom COD-GREECE](/Users/iasonastsiouramanis/Desktop/My-WooCommerce-Project/Screenshots/custom-cod-fees-greece.png)
![Checkout with Custom COD-GLOBAL](/Users/iasonastsiouramanis/Desktop/My-WooCommerce-Project/Screenshots/custom-cod-fees-global.png)
![GDPR Cookie Consent](/Users/iasonastsiouramanis/Desktop/My-WooCommerce-Project/Screenshots/GDPR-cookie-consent.png)
![Accessibility Menu](/Users/iasonastsiouramanis/Desktop/My-WooCommerce-Project/Screenshots/accessibility-menu.png)
![Admin Security - Blocked Default Login](/Users/iasonastsiouramanis/Desktop/My-WooCommerce-Project/Screenshots/blocked-default-login.png)

