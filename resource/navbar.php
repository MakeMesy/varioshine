
<nav >
    <div class="main_navbar flex justify-between px-20 items-center pt-3" data-aos="fade-down">
        <div class="nav_img">
            <img src="./assets/img/main/varioshine_long.webp" alt="">
        </div>
        <div class="nav_main_items">
            <ul class="flex gap-10 text-xl uppercase nav-items">

                <li><a href="./">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="products.php">Products</a></li>
                <li><a href="contact.php">Contact</a></li>

            </ul>
        </div>
    </div>
    <!-- mobile navbar -->
    <div class="main_navbar mobile_bar ">
        <div class="nav_img">
            <img src="./assets/img/main/varioshine_long.webp" alt="">
        </div>
        <div class="toggle_icon" id="toggle_icon">
            <i class="fa-solid fa-bars"></i>
        </div>

    </div>
</nav>
<?php


$settings = [];
$result = mysqli_query($conn, "SELECT * FROM `settings` LIMIT 1");
if ($result && mysqli_num_rows($result) > 0) {
  $settings = mysqli_fetch_assoc($result);
}
function safe_htmlspecialchars($value)
{
    return htmlspecialchars($value !== null ? $value : '-', ENT_QUOTES, 'UTF-8');
}

?>
<div class="mobile_main_items">
    <ul class="">

        <li><a href="./">Home</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="products.php">Products</a></li>
        <li><a href="contact.php">Contact</a></li>

    </ul>
    <div class="navbar_bottom_main">
        <div class="navbar_bottom">
            <div class="navbar_bottom_icon">
                <i class="fa-solid fa-envelope"></i>
            </div>
            <div class="navbar_bottom_con">
                <a href=""><?= safe_htmlspecialchars($settings['email']) ?></a>
            </div>
        </div>
        <div class="navbar_bottom">
            <div class="navbar_bottom_icon">
                <i class="fa-solid fa-phone"></i>
            </div>
            <div class="navbar_bottom_con">
                <a href=""><?= safe_htmlspecialchars($settings['phone']) ?></a>
            </div>
        </div>
        <div class="navbar_bottom">
            <div class="navbar_bottom_icon">
                <i class="fa-solid fa-location-dot"></i>
            </div>
            <div class="navbar_bottom_con">
               <?= safe_htmlspecialchars($settings['address']) ?>
            </div>
        </div>
    </div>
    <h2 class="slogan_text_navbar" >
    Shine Smart. <br> Shine Strong. <br> Shine like Varioshine
    </h2>
</div>


<script>

let navbar = document.querySelector(".main_navbar");
let mobile_navbar = document.querySelector(".mobile_bar ");
let toggle_icon=document.querySelector('#toggle_icon')
let mobile_main_items=document.querySelector(".mobile_main_items")

document.addEventListener('DOMContentLoaded',()=>{
window.addEventListener("scroll", function () {
    if (window.scrollY > 70) {
        navbar.classList.add("fixedtop")
        mobile_navbar.classList.add("fixedtop")
    } else{
        navbar.classList.remove("fixedtop")
        mobile_navbar.classList.remove("fixedtop")
    }
});
toggle_icon.addEventListener('click', () => {
  mobile_main_items.classList.toggle("active");
});

})

</script>

