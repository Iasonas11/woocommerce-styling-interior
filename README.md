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

<img width="721" height="835" alt="contact-details" src="https://github.com/user-attachments/assets/4be90f88-263a-4e65-b858-de2d058ced9a" />
<img width="1710" height="1107" alt="product-filtering-searching" src="https://github.com/user-attachments/assets/eaa341ba-de58-46bd-9f27-8d6f4b97df51" />
<img width="852" height="973" alt="GDPR-cookie-consent" src="https://github.com/user-attachments/assets/8052ae1a-7691-479f-8cdd-4a2e78af4009" />
<img width="1379" height="938" alt="custom-cod-fees-greece" src="https://github.com/user-attachments/assets/5be404bc-761e-4e51-b62d-ac4ce450816b" />
<img width="1334" height="871" alt="custom-cod-fees-global" src="https://github.com/user-attachments/assets/9385714f-e9b1-4f73-a61e-ef955b3dd15c" />
<img width="1710" height="1107" alt="blocked-default-login" src="https://github.com/user-attachments/assets/2423accd-51ed-4d91-82f3-7953d6d17942" />
<img width="580" height="1015" alt="accessibility-menu" src="https://github.com/user-attachments/assets/ff0ae481-32dd-4d72-8a5e-885d74160802" />


