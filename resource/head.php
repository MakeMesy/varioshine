<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php echo htmlspecialchars($page_title); ?></title>


<!-- seo -->
<meta name="description" content="<?php echo htmlspecialchars($page_description); ?>">
<meta name="robots" content="index, follow">
<link rel="canonical" href="<?php echo $page_url; ?>">

<!-- Open Graph -->
<meta property="og:title" content="<?php echo htmlspecialchars($page_title); ?>">
<meta property="og:description" content="<?php echo htmlspecialchars($page_description); ?>">
<meta name="keywords" content="digital marketing,SEO,website developement , app development, marketing,social media marketing,Digital Solutions , Training Company">
<meta name="revisit-after" content="1 days">
<meta name="robots" content="index, follow">
<meta name="language" content="English">
<meta property="og:image" content="<?php echo $Icon_Image; ?>">
<meta property="og:url" content="<?php echo $page_url; ?>">
<meta property="og:type" content="website">

<!-- Structured Data for SEO -->
<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "WebPage",
        "name": "<?php echo htmlspecialchars($page_title); ?>",
        "description": "<?php echo htmlspecialchars($page_description); ?>",
        "url": "<?php echo $page_url; ?>",
        "image": "<?php echo $Icon_Image; ?>",
        "publisher": {
            "@type": "Organization",
            "name": "varioshine",
            "logo": {
                "@type": "ImageObject",
                "url": "<?php echo $Icon_Image; ?>"
            }
        }
    }
</script>
<link rel="shortcut icon" href="<?php echo $Icon_Image; ?>" type="image/x-icon">


<!-- tailwind -->
<script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
<!-- favicon -->
<link rel="shortcut icon" href="<?php echo htmlspecialchars($Icon_Image); ?>" type="image/x-icon">
<!-- font awesome -->
<script src="https://kit.fontawesome.com/181ea7bd20.js" crossorigin="anonymous"></script>

<!-- aos animation -->
   <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
   