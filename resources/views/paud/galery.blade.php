<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Dashboard</title>

        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Kaisei+HarunoUmi:wght@400;500;700&display=swap"
            rel="stylesheet"
        />
        <!-- Dropdown -->
        <script src="https://unpkg.com/@themesberg/flowbite@latest/dist/flowbite.bundle.js"></script>
        <link
            rel="stylesheet"
            href="https://unpkg.com/flowbite@1.5.3/dist/flowbite.min.css"
        />
        <!-- Auto Slide Carousel -->
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        />
        <link
            rel="stylesheet"
            href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap"
        />
        <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css"
        />
        <!-- FONT -->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Caveat+Brush&family=Fuzzy+Bubbles:wght@400;700&display=swap"
            rel="stylesheet"
        />
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap"
            rel="stylesheet"
        />

        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Inter:wght@200;500;700&family=PT+Serif:ital,wght@0,400;0,700;1,400&display=swap"
            rel="stylesheet"
        />

        <!-- AOS -->
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

        <script src="https://cdn.tailwindcss.com"></script>
        <script>
            tailwind.config = {
                theme: {
                    container: {
                        center: true,
                        padding: "16px",
                    },
                    extend: {
                        colors: {
                            hijaumuda: "#94EC08",
                            hijautua: "#98E51E",
                            kuning: "#F4C447",
                            darkblue: "#25316D",
                            biru: "#24DCF2",
                            ijo: "#71A72D",
                            gelap: "#0B2027",
                            terang: "#8CBAB4",
                        },
                        fontFamily: {
                            caveat: ["Caveat Brush"],
                            fuzzy: ["Fuzzy Bubbles"],
                            poppins: ["Poppins"],
                            peralta: ["Peralta"],
                            inter: ["Inter"],
                        },
                        screens: {
                            "2xl": "1320px",
                        },
                    },
                },
            };
        </script>

        <link href="dist/output.css" rel="stylesheet" />
        <link
            rel="icon"
            href="aset/iconhead.png"
            type="image/gif"
            sizes="5x5"
        />
    </head>
    <body>
        <!-- Header start -->
        <header
            class="sticky top-0 z-50 bg-transparent left-0 flex items-center w-full bg-gradient-to-tr bg-white rounded-b-md bg-clip-padding"
        >
            <div class="container">
                <div class="flex items-center justify-between relative">
                    <div class="px-3 xl:ml-32">
                        <a href="/paud"
                            ><img
                                src="./aset/mainlogo.png"
                                class="w-64 block py-0"
                        /></a>
                    </div>
                    <div class="flex items-center mr-20 px-3">
                        <button
                            id="hamburger"
                            name="hamburger"
                            type="button"
                            class="block absolute right-4 py-2 lg:hidden"
                        >
                            <span
                                class="hamburger-line transition duration-300 ease-in-out origin-top-left"
                            ></span>
                            <span
                                class="hamburger-line transition duration-300 ease-in-out"
                            ></span>
                            <span
                                class="hamburger-line transition duration-300 ease-in-out origin-bottom-left"
                            ></span>
                        </button>
                        <div
                            id="transfer"
                            class="w-full mx-auto self-center lg:w-1/3"
                        ></div>
                        <button
                            id="exit"
                            type="button"
                            class="hover:text-red-400 mb-10 float-right"
                        ></button>

                        <nav
                            id="nav-menu"
                            class="hidden absolute py-5 bg-white shadow-lg rounded-lg max-w-[250px] w-full right-4 top-full lg:block lg:static lg:bg-transparent lg:max-w-full lg:shadow-none lg:rounded-none"
                        >
                            <ul class="block lg:flex">
                                <li class="group">
                                    <a
                                        href="/paud"
                                        class="text-base text-black py-2 px-3 mx-4 flex group-hover:text-black group-hover:bg-hijautua rounded-md transition delay-50"
                                        >Home</a
                                    >
                                </li>

                                <button
                                    id="dropdownUsersButton"
                                    data-dropdown-toggle="dropdownUsers"
                                    data-dropdown-placement="bottom"
                                    class="text-base text-dark hover:bg-hijautua focus:ring-4 focus:outline-none focus:ring-biru rounded-lg py-2 px-3 mx-4 text-center inline-flex items-center"
                                    type="button"
                                >
                                    About
                                    <svg
                                        class="ml-2 w-4 h-4"
                                        aria-hidden="true"
                                        fill="none"
                                        stroke="currentColor"
                                        viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M19 9l-7 7-7-7"
                                        ></path>
                                    </svg>
                                </button>
                                <!-- Dropdown menu -->
                                <div
                                    id="dropdownUsers"
                                    class="hidden z-5 w-60 bg-white rounded shadow"
                                    data-popper-reference-hidden=""
                                    data-popper-escaped=""
                                    data-popper-placement="bottom"
                                    style="
                                        position: absolute;
                                        inset: 0px auto auto 0px;
                                        transform: translate3d(
                                            0px,
                                            410.4px,
                                            0px
                                        );
                                    "
                                >
                                    <ul
                                        class="overflow-y-auto py-1 h-44 text-gray-700 dark:text-gray-200"
                                        aria-labelledby="dropdownUsersButton"
                                    >
                                        <li>
                                            <a
                                                href="/Founder"
                                                class="flex items-center py-2 px-4 hover:bg-hijautua"
                                            >
                                                <img
                                                    class="mr-2 w-10 h-10 rounded-full"
                                                    src="aset/avatar1.svg"
                                                    alt="Jese image"
                                                />
                                                Founder
                                            </a>
                                        </li>

                                        <li>
                                            <a
                                                href="/Filosofi"
                                                class="flex items-center py-2 px-4 hover:bg-hijautua"
                                            >
                                                <img
                                                    class="mr-2 w-10 h-10 rounded-full"
                                                    src="aset/avatar1.svg"
                                                    alt="Jese image"
                                                />
                                                Philosophy
                                            </a>
                                        </li>
                                        <li>
                                            <a
                                                href="/Guru"
                                                class="flex items-center py-2 px-4 hover:bg-hijautua"
                                            >
                                                <img
                                                    class="mr-2 w-10 h-10 rounded-full"
                                                    src="aset/avatar1.svg"
                                                    alt="Jese image"
                                                />
                                                Teachers
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <li class="group">
                                    <a
                                        href="/galery"
                                        class="text-base bg-hijaumuda text-dark py-2 px-3 mx-4 flex group-hover:text-black group-hover:bg-hijautua rounded-md transition delay-50"
                                        >Galery</a
                                    >
                                </li>
                                <li class="group">
                                    <a
                                        href="/event"
                                        class="text-base text-dark py-2 px-3 mx-4 flex group-hover:text-black group-hover:bg-hijautua rounded-md transition delay-50"
                                        >Events</a
                                    >
                                </li>
                                <li class="group">
                                    <a
                                        href="/contact"
                                        class="text-base text-dark py-2 px-3 mx-4 flex group-hover:text-black group-hover:bg-hijautua rounded-md transition delay-50"
                                        >Contact</a
                                    >
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
        <!-- Header end -->

        <!-- Hero section start -->
        <section
            id="home"
            class="h-screen bg-white/30 bg-cover bg-center bg-no-repeat"
            style="background-image: url({{ asset('storage/' . (empty($side[2]['image'])?'jpg1.jpg': $side[2]['image'] ) ) }})"
        >
            <div class="w-full h-full py-20 bg-black/20">
                <div class="container">
                    <div
                        class="flex flex-wrap"
                        data-aos="fade-up"
                        data-aos-duration="700"
                    >
                        <div
                            class="w-full absolute -translate-x-1/2 text-white top-[40%] left-1/2 self-center text-center px-4"
                        >
                            <h1
                                class="text-3xl text-hijaumuda font-caveat font-bold uppercase md:text-3xl lg:text-4xl"
                                data-aos="fade-up"
                                data-aos-duration="700"
                            >
                                galeri kegiatan
                            </h1>
                            <h1
                                class="text-3xl text-kuning font-caveat font-bold uppercase md:text-4xl lg:text-5xl"
                                data-aos="fade-up"
                                data-aos-duration="700"
                            >
                                ananda mentari
                            </h1>
                            <div
                                class="bg-hijaumuda w-1/4 md:w-[15%] lg:w-[12%] mx-auto mt-3 text-center rounded-lg flex"
                            >
                                <a
                                    class="flex text-center text-slate-50 text-2xl font-caveat mx-auto p-2 hover:text-slate-500"
                                    aria-label="Chat on WhatsApp"
                                    href="#galeri"
                                >
                                    Jelajahi
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke-width="1.5"
                                        stroke="currentColor"
                                        class="w-7 h-7 mt-0.5 flex flex-wrap"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M11.25 4.5l7.5 7.5-7.5 7.5m-6-15l7.5 7.5-7.5 7.5"
                                        />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Hero section end -->

        <section
            id="galeri"
            class="overflow-hidden text-gray-700 bg-cover bg-no-repeat bg-hijaumuda"
            style="background-image: url(aset/bg-ekskul.png)"
        >
            <div class="w-full bg-black/30">
                <div class="max-w-xl mx-auto text-center pt-16">
                    <h3
                        class="text-kuning capitalize mx-auto mb-2 pt-16 font-caveat font-bold text-3xl md:text-3xl lg:text-5xl"
                        data-aos="fade-up"
                    >
                         <span class="text-hijaumuda">{{ (empty($galery[0]['slug'])?'data belum diisi':$galery[0]['slug']) }}</span>
                    </h3>
                    <p
                        class="font-extrabold text-transparent bg-clip-text bg-kuning text-3xl md:text-3xl lg:text-5xl font-caveat"
                    >
                        &
                    </p>
                    <h3
                        class="text-kuning capitalize mx-auto mb-2 font-caveat font-bold text-3xl md:text-3xl lg:text-5xl"
                        data-aos="fade-up"
                    >
                    {{ (empty($galery[4]['slug'])?'data belum diisi':$galery[4]['slug']) }}
                        <span class="text-hijaumuda"></span>
                    </h3>
                </div>
                <div class="container px-5 py-2 mx-auto lg:pt-16 lg:px-32">
                    <div class="flex flex-wrap -m-1 md:-m-2">
                        <div class="flex flex-wrap w-1/2">
                            <div class="w-1/2 p-1 md:p-2">
                                <img
                                    alt="gallery"
                                    class="block object-cover object-center w-full h-full rounded-lg"
                                    src="{{ asset('storage/' . (empty($galery[1]['image'])?'jpg1.jpg': $galery[1]['image'] ) ) }}"
                                />
                            </div>
                            <div class="w-1/2 p-1 md:p-2">
                                <img
                                    alt="gallery"
                                    class="block object-cover object-center w-full h-full rounded-lg"
                                    src="{{ asset('storage/' . (empty($galery[2]['image'])?'jpg1.jpg': $galery[2]['image'] ) ) }}"
                                />
                            </div>
                            <div class="w-full p-1 md:p-2">
                                <img
                                    alt="gallery"
                                    class="block object-cover object-center w-full h-full rounded-lg"
                                    src="{{ asset('storage/' . (empty($galery[3]['image'])?'jpg1.jpg': $galery[3]['image'] ) ) }}"
                                />
                            </div>
                        </div>
                        <div class="flex flex-wrap w-1/2">
                            <div class="w-full p-1 md:p-2">
                                <img
                                    alt="gallery"
                                    class="block object-cover object-center w-full h-full rounded-lg"
                                    src="{{ asset('storage/' . (empty($galery[5]['image'])?'jpg1.jpg': $galery[5]['image'] ) ) }}"
                                />
                            </div>
                            <div class="w-1/2 p-1 md:p-2">
                                <img
                                    alt="gallery"
                                    class="block object-cover object-center w-full h-full rounded-lg"
                                    src="{{ asset('storage/' . (empty($galery[6]['image'])?'jpg1.jpg': $galery[6]['image'] ) ) }}"
                                />
                            </div>
                            <div class="w-1/2 p-1 md:p-2">
                                <img
                                    alt="gallery"
                                    class="block object-cover object-center w-full h-full rounded-lg"
                                    src="{{ asset('storage/' . (empty($galery[7]['image'])?'jpg2.jpg': $galery[7]['image'] ) ) }}"
                                />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="overflow-hidden text-gray-700 pb-20">
                    <div class="max-w-xl mx-auto text-center">
                        <h3
                            class="text-kuning capitalize mx-auto mb-2 pt-16 font-caveat font-bold text-3xl md:text-3xl lg:text-5xl"
                            data-aos="fade-up"
                        >
                            Galery <span class="text-hijaumuda"> Ananda Mentari</span>
                        </h3>
                        <p class="text-white text-xl font-poppins">
                            
                        </p>
                    </div>
                    <div class="container px-5 py-2 mx-auto lg:pt-12 lg:px-32">
                        <div class="flex flex-wrap -m-1 md:-m-2">
                            @foreach ($galery->skip(8) as $item)
                            <div class="flex flex-wrap w-1/3">
                                <div class="w-full p-1 md:p-2">
                                    <img
                                        alt="gallery"
                                        class="block object-cover object-center w-full h-full rounded-lg"
                                        src="{{ asset('storage/' . $item->image) }}"
                                    />
                                </div>
                            </div>
                            @endforeach
                            {{-- <div class="flex flex-wrap w-1/3">
                                <div class="w-full p-1 md:p-2">
                                    <img
                                        alt="gallery"
                                        class="block object-cover object-center w-full h-full rounded-lg"
                                        src="aset/fotosportday/photo_sport_2.jpg"
                                    />
                                </div>
                            </div>
                            <div class="flex flex-wrap w-1/3">
                                <div class="w-full p-1 md:p-2">
                                    <img
                                        alt="gallery"
                                        class="block object-cover object-center w-full h-full rounded-lg"
                                        src="aset/fotosportday/photo_sport_3.jpg"
                                    />
                                </div>
                            </div>
                            <div class="flex flex-wrap w-1/3">
                                <div class="w-full p-1 md:p-2">
                                    <img
                                        alt="gallery"
                                        class="block object-cover object-center w-full h-full rounded-lg"
                                        src="aset/fotosportday/photo_sport_4.jpg"
                                    />
                                </div>
                            </div>
                            <div class="flex flex-wrap w-1/3">
                                <div class="w-full p-1 md:p-2">
                                    <img
                                        alt="gallery"
                                        class="block object-cover object-center w-full h-full rounded-lg"
                                        src="aset/fotosportday/photo_sport_5.jpg"
                                    />
                                </div>
                            </div>
                            <div class="flex flex-wrap w-1/3">
                                <div class="w-full p-1 md:p-2">
                                    <img
                                        alt="gallery"
                                        class="block object-cover object-center w-full h-full rounded-lg"
                                        src="aset/fotosportday/photo_sport_6.jpg"
                                    />
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section
            id="carouselExampleCrossfade"
            class="carousel slide carousel-fade relative"
            data-bs-ride="carousel"
        >
            <div
                class="carousel-indicators absolute right-0 bottom-0 left-0 flex justify-center p-0 mb-4"
            >
                <button
                    type="button"
                    data-bs-target="#carouselExampleCrossfade"
                    data-bs-slide-to="0"
                    class="active"
                    aria-current="true"
                    aria-label="Slide 1"
                ></button>
                <button
                    type="button"
                    data-bs-target="#carouselExampleCrossfade"
                    data-bs-slide-to="1"
                    aria-label="Slide 2"
                ></button>
                <button
                    type="button"
                    data-bs-target="#carouselExampleCrossfade"
                    data-bs-slide-to="2"
                    aria-label="Slide 3"
                ></button>
            </div>
            <div class="carousel-inner relative w-full overflow-hidden">
                <div class="carousel-item active float-left w-full">
                    <img
                        src="{{ asset('storage/' . (empty($side[0]['image'])?'jpg4.jpg': $side[0]['image'] ) ) }}"
                        class="block w-full"
                        alt="Foto Outdoor 1"
                    />
                </div>
                <div class="carousel-item float-left w-full">
                    <img
                        src="{{ asset('storage/' . (empty($side[1]['image'])?'jpg4.jpg': $side[1]['image'] ) ) }}"
                        class="block w-full"
                        alt="Foto Outdoor 2"
                    />
                </div>
                <div class="carousel-item float-left w-full">
                    <img
                        src="{{ asset('storage/' . (empty($side[2]['image'])?'jpg4.jpg': $side[2]['image'] ) ) }}"
                        class="block w-full"
                        alt="Foto Outdoor 3"
                    />
                </div>
            </div>
            <button
                class="carousel-control-prev absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline left-0"
                type="button"
                data-bs-target="#carouselExampleCrossfade"
                data-bs-slide="prev"
            >
                <span
                    class="carousel-control-prev-icon inline-block bg-no-repeat"
                    aria-hidden="true"
                ></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button
                class="carousel-control-next absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline right-0"
                type="button"
                data-bs-target="#carouselExampleCrossfade"
                data-bs-slide="next"
            >
                <span
                    class="carousel-control-next-icon inline-block bg-no-repeat"
                    aria-hidden="true"
                ></span>
                <span class="visually-hidden">Next</span>
            </button>
        </section>

        <svg
            id="wave"
            style="transform: rotate(0deg); transition: 0.3s"
            viewBox="0 0 1440 110"
            version="1.1"
            xmlns="http://www.w3.org/2000/svg"
        >
            <defs>
                <linearGradient id="sw-gradient-0" x1="0" x2="0" y1="1" y2="0">
                    <stop stop-color="rgba(76, 169, 216, 1)" offset="0%"></stop>
                    <stop
                        stop-color="rgba(121.937, 190.913, 225.772, 1)"
                        offset="100%"
                    ></stop>
                </linearGradient>
            </defs>
            <path
                style="transform: translate(0, 0px); opacity: 1"
                fill="url(#sw-gradient-0)"
                d="M0,55L40,49.5C80,44,160,33,240,40.3C320,48,400,73,480,73.3C560,73,640,48,720,36.7C800,26,880,29,960,36.7C1040,44,1120,55,1200,53.2C1280,51,1360,37,1440,33C1520,29,1600,37,1680,34.8C1760,33,1840,22,1920,29.3C2000,37,2080,62,2160,67.8C2240,73,2320,59,2400,55C2480,51,2560,59,2640,62.3C2720,66,2800,66,2880,66C2960,66,3040,66,3120,64.2C3200,62,3280,59,3360,58.7C3440,59,3520,62,3600,53.2C3680,44,3760,22,3840,22C3920,22,4000,44,4080,49.5C4160,55,4240,44,4320,40.3C4400,37,4480,40,4560,45.8C4640,51,4720,59,4800,51.3C4880,44,4960,22,5040,14.7C5120,7,5200,15,5280,18.3C5360,22,5440,22,5520,18.3C5600,15,5680,7,5720,3.7L5760,0L5760,110L5720,110C5680,110,5600,110,5520,110C5440,110,5360,110,5280,110C5200,110,5120,110,5040,110C4960,110,4880,110,4800,110C4720,110,4640,110,4560,110C4480,110,4400,110,4320,110C4240,110,4160,110,4080,110C4000,110,3920,110,3840,110C3760,110,3680,110,3600,110C3520,110,3440,110,3360,110C3280,110,3200,110,3120,110C3040,110,2960,110,2880,110C2800,110,2720,110,2640,110C2560,110,2480,110,2400,110C2320,110,2240,110,2160,110C2080,110,2000,110,1920,110C1840,110,1760,110,1680,110C1600,110,1520,110,1440,110C1360,110,1280,110,1200,110C1120,110,1040,110,960,110C880,110,800,110,720,110C640,110,560,110,480,110C400,110,320,110,240,110C160,110,80,110,40,110L0,110Z"
            ></path>
        </svg>
        <!-- Footer section start-->
        <footer class="pt-12 pb-12 bg-[#4CA9D8]">
            <div class="container">
              <div class="flex flex-wrap" data-aos="fade-up" data-aos-duration="2000">
                <div class="w-full px-4 mb-12 text-slate-300 font-medium md:w-1/3">
                  <h3 class="font-bold text-2xl mb-2 text-slate-200">
                    Any Question?
                  </h3>
                  <a
                    class="flex flex-wrap hover:text-slate-500 mt-5"
                    aria-label="Maps"
                    href="http://maps.google.com/?q=Playgroup and Daycare Ananda Mentari"
                  >
                    <svg
                      class="w-6 mr-2"
                      role="img"
                      viewBox="0 0 24 24"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <title>Google Maps</title>
                      <path
                        d="M19.527 4.799c1.212 2.608.937 5.678-.405 8.173-1.101 2.047-2.744 3.74-4.098 5.614-.619.858-1.244 1.75-1.669 2.727-.141.325-.263.658-.383.992-.121.333-.224.673-.34 1.008-.109.314-.236.684-.627.687h-.007c-.466-.001-.579-.53-.695-.887-.284-.874-.581-1.713-1.019-2.525-.51-.944-1.145-1.817-1.79-2.671L19.527 4.799zM8.545 7.705l-3.959 4.707c.724 1.54 1.821 2.863 2.871 4.18.247.31.494.622.737.936l4.984-5.925-.029.01c-1.741.601-3.691-.291-4.392-1.987a3.377 3.377 0 0 1-.209-.716c-.063-.437-.077-.761-.004-1.198l.001-.007zM5.492 3.149l-.003.004c-1.947 2.466-2.281 5.88-1.117 8.77l4.785-5.689-.058-.05-3.607-3.035zM14.661.436l-3.838 4.563a.295.295 0 0 1 .027-.01c1.6-.551 3.403.15 4.22 1.626.176.319.323.683.377 1.045.068.446.085.773.012 1.22l-.003.016 3.836-4.561A8.382 8.382 0 0 0 14.67.439l-.009-.003zM9.466 5.868L14.162.285l-.047-.012A8.31 8.31 0 0 0 11.986 0a8.439 8.439 0 0 0-6.169 2.766l-.016.018 3.665 3.084z"
                      />
                    </svg>
                    {{ (empty($contac[0]['alamat'])?'data belum diisi':$contac[0]['alamat']) }}
                    <a
                      class="hover:text-slate-500"
                      aria-label="Maps"
                      href="http://maps.google.com/?q={{ (empty($contac[0]['alamat'])?'data belum diisi':$contac[0]['alamat']) }}"
                    >
                    </a>
                  </a>
      
                  <a
                    class="flex flex-wrap hover:text-slate-500 mt-5"
                    aria-label="Chat on WhatsApp"
                    href="https://wa.me/{{ (empty($contac[0]['nomor'])?'data belum diisi':$contac[0]['nomor']) }}"
                  >
                    <svg
                      class="w-6 mr-2"
                      role="img"
                      viewBox="0 0 24 24"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <title>WhatsApp</title>
                      <path
                        d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"
                      />
                    </svg>
                    Chat on WhatsApp
                  </a>
                  <a
                    class="flex flex-wrap hover:text-slate-500 mt-5"
                    aria-label="Call"
                    href="{{ (empty($contac[0]['telpon'])?'data belum diisi':$contac[0]['telpon']) }}"
                  >
                    <svg
                      class="w-6 mr-2"
                      xmlns="http://www.w3.org/2000/svg"
                      viewBox="0 0 24 24"
                      fill="currentColor"
                      class="w-6 h-6"
                    >
                      <path
                        fill-rule="evenodd"
                        d="M1.5 4.5a3 3 0 013-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 01-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 006.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 011.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 01-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5z"
                        clip-rule="evenodd"
                      />
                    </svg>
      
                    {{ (empty($contac[0]['telpon'])?'data belum diisi':$contac[0]['telpon']) }}
                  </a>
                  <a
                    class="flex flex-wrap hover:text-slate-500 mt-5"
                    aria-label="Call"
                    href="{{ (empty($contac[0]['email'])?'data belum diisi':$contac[0]['email']) }}"
                  >
                    <svg
                      class="w-6 mr-2"
                      xmlns="http://www.w3.org/2000/svg"
                      viewBox="0 0 24 24"
                      fill="currentColor"
                      class="w-6 h-6"
                    >
                      <path
                        d="M1.5 8.67v8.58a3 3 0 003 3h15a3 3 0 003-3V8.67l-8.928 5.493a3 3 0 01-3.144 0L1.5 8.67z"
                      />
                      <path
                        d="M22.5 6.908V6.75a3 3 0 00-3-3h-15a3 3 0 00-3 3v.158l9.714 5.978a1.5 1.5 0 001.572 0L22.5 6.908z"
                      />
                    </svg>
      
                    {{ (empty($contac[0]['email'])?'data belum diisi':$contac[0]['email']) }}
                  </a>
                </div>
                <div class="w-full text-slate-200 px-4 mb-12 md:w-1/3">
                  <h3 class="font-semibold text-xl mb-5">Links</h3>
                  <ul class="text-slate-300">
                    <li>
                      <a
                        href="/paud"
                        class="inline-block text-base hover:text-ijoterang mb-3"
                        >Home</a
                      >
                    </li>
                    <li>
                      <a
                        href="#about"
                        class="inline-block text-base hover:text-ijoterang mb-3"
                        >About</a
                      >
                    </li>
                    <li>
                      <a
                        href="#facility"
                        class="inline-block text-base hover:text-ijoterang mb-3"
                        >Facility</a
                      >
                    </li>
                    <li>
                      <a
                        href="/event"
                        class="inline-block text-base hover:text-ijoterang mb-3"
                        >Events</a
                      >
                    </li>
                    <li>
                      <a
                        href="/contact"
                        class="inline-block text-base hover:text-ijoterang mb-3"
                        >Contact Us</a
                      >
                    </li>
                  </ul>
                </div>
                <div class="w-full px-4 mb-12 md:w-1/3">
                  <h3 class="font-semibold text-slate-200 text-xl mb-5">
                    Connect With Us
                  </h3>
                  <div class="flex items-center">
                    <a
                      href="https://www.youtube.com/channel/UCwmrQS1oCZfREPg3rwTH7Tg/featured"
                      target="_blank"
                      class="w-9 h-9 mr-3 rounded-full flex justify-center items-center bg-white border border-slate-300 hover:border-ijoterang hover:bg-ijo hover:text-white"
                    >
                      <svg
                        role="img"
                        width="20"
                        class="fill-current"
                        viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <title>YouTube</title>
                        <path
                          d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"
                        />
                      </svg>
                    </a>
                    <a
                      href="https://www.instagram.com/ananda_mentari/?hl=id"
                      target="_blank"
                      class="w-9 h-9 mr-3 rounded-full flex justify-center items-center bg-white border border-slate-300 hover:border-ijoterang hover:bg-ijo hover:text-white"
                    >
                      <svg
                        role="img"
                        width="20"
                        class="fill-current"
                        viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <title>Instagram</title>
                        <path
                          d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z"
                        />
                      </svg>
                    </a>
                    {{-- <a
                      href="https://www.linkedin.com/in/firman-almadhani-kurniawan/"
                      target="_blank"
                      class="w-9 h-9 mr-3 rounded-full flex justify-center items-center bg-white border border-slate-300 hover:border-ijoterang hover:bg-ijo hover:text-white"
                    >
                      <svg
                        role="img"
                        width="20"
                        class="fill-current"
                        viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <title>LinkedIn</title>
                        <path
                          d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"
                        />
                      </svg>
                    </a>
                    <a
                      href="https://github.com/almadhanif"
                      target="_blank"
                      class="w-9 h-9 mr-3 rounded-full flex justify-center items-center bg-white border border-slate-300 hover:border-ijoterang hover:bg-ijo hover:text-white"
                    >
                      <svg
                        role="img"
                        width="20"
                        class="fill-current"
                        viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <title>GitHub</title>
                        <path
                          d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"
                        />
                      </svg>
                    </a> --}}
                  </div>
                </div>
              </div>
              <!-- Made by love -->
              <div
                class="py-8 border-t border-white text-slate-200 flex justify-center"
              >
                <span class="pr-1"
                  >Copyright&copy;2022 All right reserved <span>|</span></span
                >
                <span>Ananda Mentari</span>
              </div>
            </div>
          </footer>
        <!-- Footer Section end -->
    </body>

    <script src="dist/js/script.js"></script>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
</html>
