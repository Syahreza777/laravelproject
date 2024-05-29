 <nav class="navbar navbar-expand-sm fixed-top navbar-dark">
        <div class="container pt-1 pb-1">
            <a class="navbar-brand" href="#"><b>Garden<span class="text-color">`Ku</span></b></a>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active mr-4">
                    <a class="nav-link" href="home">Home</a>
                </li>
                <li class="nav-item active mr-4">
                    <a class="nav-link" href="about">About</a>
                </li>
                <li class="nav-item active mr-4">
                    <a class="nav-link" href="garden">Gallery</a>
                </li>
            </ul>
        </div>
    </nav>



    <!-- JUMBOTRON -->
    <section id="home">
        <div class="jumbotron jumbotron-fluid bgku">
            <div class="about-us">
                <h1 style="font-size: 50px"><b>Our Gallery</b></h1>
                <p class="mt-4"><b><span class="text-color">HOME</span> >> GALLERY PAGE</b></p>
            </div>
        </div>
    </section>

    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500&display=swap");

* {
    /* font yang saya gunakan */
    font-family: "Poppins", sans-serif;
}

html {
    /* membuat animasi scroll menjadi smooth / mulus */
    scroll-behavior: smooth;
}

.bgku {
    /* background jumbotron */
    background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)),
        url("../img/fruits.jpg");
    background-size: cover;
    width: 100%;
    padding: 8rem 0 !important;
}

.jumbotron {
    /* menghilangkan jarak antara jumbotron dengan section about agar tidak memiliki celah */
    margin-bottom: 0;
}

.jmb-text {
    /* memberi jarak antara text jumbotron dengan navbar*/
    margin-top: 12%;
}

nav {
    /* mengatur design navbar */
    background-color: transparent;
    transition: background-color 0.3s ease;
    position: fixed;
}

nav.scrolled {
    /* animasi navbar ketika di scroll */
    background-color: #1f242d;
    box-shadow: 0px 9px 9px rgba(0, 0, 0, 0.1);
}

nav.scrolled .navbar-brand {
    /* animasi navbar-brand ketika di scroll */
    color: #e0e0e0;
    transition: 0.3s ease;
}

.text-color {
    /* warna text andalan */
    color: #20b2aa;
}

.navbar .navbar-nav .nav-item .nav-link {
    /* warna text link navbar */
    color: #fff;
}

.navbar .navbar-nav .nav-link:hover {
    /* animasi ketika text link navbar dihover */
    color: #20b2aa;
    transition: 0.3s;
}

footer {
    /* background color milik footer */
    background: #1f242d;
}

.text-footer {
    /* warna text di footer */
    color: #ccc;
}

.ml {
    margin-left: 280px;
}

.text-pagi {
    /* text untuk deskripsi, <h>, dll*/
    color: #e0e0e0;
}

.garden-section {
    /* section speciality */
    background: white;
    padding: 4rem 0;
}

.border-gallery {
    border: 1px solid #ccc;
}

.img-gallery {
    height: 300px;
    object-fit: cover;
    box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s;
}

.img-gallery:hover {
    transform: scale(1.02);
    cursor: pointer;
}

.btn-custom {
    /* design button learn more */
    background-color: #20b2aa;
    color: white;
    cursor: pointer;
    box-shadow: 0px 9px 9px rgba(0, 0, 0, 0.1);
    width: 160px;
    height: 50px;
}

.btn-custom:hover {
    /* animasi ketika button learn more di hover */
    background-color: transparent;
    color: #20b2aa;
    border: 1px solid #20b2aa;
    transition: 0.3s;
}

.about-us{
    color: #fff;
    text-align: center;
}

