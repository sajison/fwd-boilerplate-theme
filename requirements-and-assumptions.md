# Requirements and Assumptions

## Requirements
The theme, at its core, must be a boilerplate that requires no configuration or deletion out of the box. Its installation and use should require as little use of the terminal as possible. Beyond that:

 - External assets will be managed through a package manager (npm, yarn, composer, etc.)
 - All built-in libraries will not require newer jQuery than what is baked into WordPress by default
 - Lazy loading of images will be possible through an included library
 - Assets will be linted
 - Assets will be transpiled if necessary
 - Assets will be compressed as much as possible without sacrificing noticeable quality
 - An optional newer version of jQuery will be included through a toggleable option in theme settings
 - Fonts will be converted from TTF to WOFF and WOFF2
 - JavaScript will be loaded in the footer where possible
 - Custom image sizes will be set for the theme
 - TypeKit support will be toggleable through theme settings
 - Native dialog support will be include via Google's dialog-polyfill library
 - Asset bundling will be handled with Webpack
 - JavaScript will be bundled with Babel, Uglify, and ESLint
 - CSS will be bundled with Autoprefixer, stylelint, cssnano, and node-sass
 - JPGs will be optimized with JPEGOptim
 - PNGs will be optimized with PNGQuant
 - SVGs will be optimized with SVGO
 - Favicon support

## Assumptions
Certain plugins are assumed to already be in use within and outside of this theme. These include:

 - Advanced Custom Fields
 - Yoast or some other SEO-handling plugin for post/page meta content
 - Carousels or slider libraries will be added manually
 - Website forms will be handled by Gravity Forms
 - Navigation menus will be customized manually, not through a preferred plugin


 Image optimization based on Addy Osmani's recommendations: https://developers.google.com/web/fundamentals/performance/optimizing-content-efficiency/automating-image-optimization/