<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1" name="viewport"/>
    <title>SITARA KECAMATAN TERAS</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"/>

    <style>
        /* General Styles */
        body {
            font-family: 'Inter', sans-serif;
            line-height: 1.6;
            color: #333;
        }

        /* Header - Top Bar */
        .top-bar {
            background-color: #f8f9fa;
            border-bottom: 1px solid #eee;
            font-size: 0.85rem;
        }
        .top-bar .contact-info span {
            margin-right: 15px;
        }
        .top-bar .social-icons a {
            color: #666;
            margin-left: 10px;
            transition: color 0.3s ease;
        }
        .top-bar .social-icons a:hover {
            color: #007bff;
        }

        /* Header - Navbar */
        .navbar-custom {
            background-color: white !important;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }

        .navbar-custom .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding-top: 15px;
            padding-bottom: 15px;
        }

        .navbar-brand img {
            max-height: 50px;
        }
        .navbar-nav .nav-link {
            font-weight: 500;
            color: #333 !important;
            padding: 0.5rem 1rem;
        }

        .navbar-nav .nav-link:hover,
        .navbar-nav .nav-link.active {
            color: #e6b800 !important;
        }

        /* Responsif untuk layar kecil */
        @media (max-width: 991.98px) {
            .navbar-custom .container {
                flex-wrap: wrap;
                justify-content: space-between;
            }
            .navbar-custom .navbar-collapse {
                width: 100%;
                order: 1;
            }
            .navbar-custom .navbar-nav {
                flex-direction: column;
                width: 100%;
                text-align: center;
                padding-top: 10px;
            }
            .navbar-custom .navbar-nav .nav-item {
                margin-bottom: 5px;
            }
        }

        /* Hero Slider */
        #hero-slider .carousel-item img {
            height: 500px;
            object-fit: cover;
        }
        #hero-slider .carousel-caption {
            background-color: rgba(0, 0, 0, 0.5);
            padding: 20px;
            border-radius: 5px;
            position: absolute;
            bottom: 20%;
            left: 50%;
            transform: translateX(-50%);
            width: 80%;
            max-width: 800px;
        }
        #hero-slider .carousel-caption h5 {
            font-size: 2.5rem;
            font-weight: bold;
        }
        #hero-slider .carousel-caption p {
            font-size: 1.2rem;
        }

        /* Map Section */
        #mapid {
            height: 600px; /* Penting: Pastikan ini memiliki nilai yang benar */
            width: 100%;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }

        /* News/Information Cards */
        #berita-informasi .card {
            border: none;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            transition: transform 0.2s ease-in-out;
        }
        #berita-informasi .card:hover {
            transform: translateY(-5px);
        }
        #berita-informasi .card-img-top {
            height: 200px;
            object-fit: cover;
        }

        /* Footer */
        footer {
            background-color: #212529 !important;
            color: #f8f9fa;
        }
        footer a {
            color: #f8f9fa;
        }
        footer a:hover {
            color: #007bff;
        }
        footer ul {
            padding-left: 0;
        }
        footer ul li {
            margin-bottom: 8px;
        }
    </style>

</head>
<body class="bg-white">

    <nav class="w-full bg-white shadow-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16 items-center">
                <div class="flex items-center space-x-6">
                    <img alt="SITARA KECAMATAN BOYOLALI SPATIAL AND LAND INFORMATION SYSTEM" class="h-12 w-auto" height="32" src="LOGO SITARA.png" width="32"/>
                </div>
                <div class="hidden md:flex space-x-6 text-[10px] font-semibold uppercase">
                </div>
                </div>
            </div>
        </div>
    </nav>

    <section class="relative w-full min-h-[480px] flex flex-col items-center justify-center text-center px-4">
        <img alt="Aerial view of Banten city buildings and landscape with a misty sky" class="absolute inset-0 w-full h-full object-cover -z-10" height="480" loading="lazy" src="https://storage.googleapis.com/a1aa/image/6f532192-27f7-42e0-733e-3824e0aeee6a.jpg" width="1920"/>
        <img alt="Banten provincial emblem logo with green, yellow, and red colors" class="mb-3" height="64" loading="lazy" src="LOGO BOYOLALI.png" width="64"/>
        <h1 class="text-white font-bold text-sm leading-tight max-w-md mb-1 drop-shadow-md">
            SPATIAL AND LAND INFORMATION SYSTEM 
        </h1>
        </p>
        <form class="w-full max-w-lg flex items-center mx-auto">
            <input class="flex-grow rounded-l-full py-2 px-4 text-xs focus:outline-none" placeholder="Apa yang Anda Cari?" type="text"/>
            <button aria-label="Search" class="bg-yellow-400 hover:bg-yellow-500 text-white rounded-r-full p-2" type="submit">
                <i class="fas fa-search text-xs"></i>
            </button>
        </form>

    </section>

    <button aria-label="Laporan Kejadian" class="fixed bottom-6 right-6 bg-yellow-400 hover:bg-yellow-500 text-black text-xs font-semibold rounded-md px-4 py-2 flex items-center space-x-2 shadow-md z-50">
        <i class="fas fa-envelope"></i>
        <span>Laporan Kejadian</span>
    </button>

    <div class="flex flex-col md:flex-row max-w-[1440px] mx-auto p-6 md:p-12 gap-6">
        <div class="md:w-1/3 flex flex-col justify-center">
            <h1 class="text-3xl font-bold mb-4">
                APA ITU
                <a class="text-blue-600 font-semibold hover:underline" href="#">SITARA?</a>
            </h1>
            <p class="font-san serif
             text-gray-700 leading-relaxed">
                SITARA adalah website pusat layanan informasi pertanahan online. Tujuan utamanya adalah membuat sistem informasi yang meningkatkan efektivitas dan efisiensi penilaian tanah, serta menyajikan informasi nilai tanah bagi yang memerlukan. SITARA dapat diakses oleh admin, penilai, petugas BPN, dan masyarakat.
            </p>
        </div>
        <img class="flex justify-start" src="https://assets.promediateknologi.id/crop/0x0:0x0/0x0/webp/photo/p2/84/2023/09/30/Kali-Talang-Umbul-Nepen-3114863945.jpg" alt="LOGO BOYOLALI.png" data-image-width="2000" data-image-height="1600">
    </div>

    <div class="min-h-screen flex flex-col items-center justify-center px-4 py-10" style="background-color:#0f2a5a">
        <div class="max-w-7xl w-full text-center mb-8" style="background-image: url('https://placehold.co/1920x400/0f2a5a/0f2a5a.png'); background-repeat: no-repeat; background-position: center; background-size: cover;">
            <h2 class="text-3xl font-extrabold text-white">
                <span>Berita</span>
                <span class="text-[#4a8bd4]">Terbaru</span>
            </h2>
        </div>
        <div class="max-w-7xl w-full flex flex-col sm:flex-row gap-6 justify-center">
            <div class="bg-white rounded-md shadow-md max-w-xs w-full flex flex-col items-center p-4">
                <a href="https://radarsolo.jawapos.com/boyolali/846101153/terselamatkan-dinas-arpus-boyolali-temukan-5-naskah-kuno-ada-yang-ditulis-di-media-dluwang" target="_blank" class="block w-full text-current no-underline hover:text-current hover:underline">
                    <img alt="Meeting room with people discussing around a table in a conference room with warm lighting" class="rounded-sm mb-3 w-full object-cover" height="200" src="https://storage.googleapis.com/a1aa/image/20721c5e-a80a-47f7-cb27-d083d7331261.jpg" width="300"/>
                    <div class="bg-[#0f8ca3] text-white font-semibold text-sm rounded px-3 py-1 mb-2">
                        Budaya & Sejarah
                    </div>
                    <div class="flex items-center gap-2 text-gray-900 mb-4 text-base">
                        <i class="far fa-calendar-alt"></i>
                        <span>27 Sep 2024</span>
                    </div>
                    <p class="text-[#4a8bd4] text-center text-sm leading-relaxed font-normal">
                        DINAS ARPUS BOYOLALI TEMUKAN 5 NASKAH KUNO, ADA YANG DITULIS DI MEDIA DLUWANG.
                    </p>
                </a>
            </div>

            <div class="bg-white rounded-md shadow-md max-w-xs w-full flex flex-col items-center p-4">
                <a href="https://radarsolo.jawapos.com/boyolali/846107279/kirab-budaya-meriahkan-puncak-hari-jadi-ke-178-kabupaten-boyolali" target="_blank" class="block w-full text-current no-underline hover:text-current hover:underline">
                    <img alt="Office meeting with people sitting around a table discussing with purple background" class="rounded-sm mb-3 w-full object-cover" height="200" src="https://storage.googleapis.com/a1aa/image/9ea4c760-6882-4bfc-e856-f1d6918ead96.jpg" width="300"/>
                    <div class="bg-[#0f8ca3] text-white font-semibold text-sm rounded px-3 py-1 mb-2">
                        Acara Daerah
                    </div>
                    <div class="flex items-center gap-2 text-gray-900 mb-4 text-base">
                        <i class="far fa-calendar-alt"></i>
                        <span>27 Sep 2024</span>
                    </div>
                    <p class="text-[#4a8bd4] text-center text-sm leading-relaxed font-normal">
                        KIRAB BUDAYA MERIAHKAN PUNCAK HARI JADI KE-178 KABUPATEN BOYOLALI.
                    </p>
                </a>
            </div>

            <div class="bg-white rounded-md shadow-md max-w-xs w-full flex flex-col items-center p-4">
                <a href="https://www.detik.com/jateng/berita/d-7946698/sodron-jadi-sapi-kurban-presiden-prabowo-di-boyolali-berbobot-1-ton" target="_blank" class="block w-full text-current no-underline hover:text-current hover:underline">
                    <img alt="Aerial view of road intersection with construction workers and traffic signs" class="rounded-sm mb-3 w-full object-cover" height="200" src="https://storage.googleapis.com/a1aa/image/bf44473d-fdda-47eb-4446-3dd25948a3e8.jpg" width="300"/>
                    <div class="bg-[#0f8ca3] text-white font-semibold text-sm rounded px-3 py-1 mb-2">
                        Berita Umum
                    </div>
                    <div class="flex items-center gap-2 text-gray-900 mb-4 text-base">
                        <i class="far fa-calendar-alt"></i>
                        <span>24 Sep 2024</span>
                    </div>
                    <p class="text-[#4a8bd4] text-center text-sm leading-relaxed font-normal">
                        SODRON JADI SAPI KURBAN PRESIDEN PRABOWO DI BOYOLALI BERBOBOT 1 TON.
                    </p>
                </a>
            </div>
        </div>
        <button class="mt-8 bg-[#0f8ca3] text-white rounded px-5 py-2 text-sm font-medium hover:bg-[#0a6a7a] transition">
            Baca Selengkapnya
        </button>
    </div>

     <div class="relative min-h-screen bg-gradient-to-tr from-[#00040f] via-[#001a3d] to-[#001a3d] flex flex-col items-center px-4 py-12">
        <h1 class="text-white text-5xl font-normal mb-2">
            DATABASE
            <span class="text-yellow-400 font-semibold">PETA</span>
        </h1>
        <p class="text-white text-sm mb-8 max-w-3xl text-center">
            Database Peta Ini Berisi Kumpulan Peta Yang Sudah Di Olah dan Terdiri Dari Beberapa Tema
        </p>
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 max-w-5xl w-full mb-10">
            <img alt="Map showing varied colors and coastline with green, orange, purple, and white areas" class="w-full object-cover" height="100" src="Kemiringan Lereng.png" width="300"/>
            <img alt="Map with dots and coastline, showing green, orange, and blue areas" class="w-full object-cover" height="100" src="Bencana.png" width="300"/>
            <img alt="Map with pink and white areas and some grid patterns" class="w-full object-cover" height="100" src="Kernel.png" width="300"/>
            <img alt="Map with red and green areas with coastline" class="w-full object-cover" height="100" src="Ketersediaan Air.png" width="300"/>
            <img alt="Map with roads and white background with some orange lines" class="w-full object-cover" height="100" src="Morfologi.png" width="300"/>
            <img alt="Map with dots and lines on a white background" class="w-full object-cover" height="100" src="Pembuangan Limbah.png" width="300"/>
            <img alt="Map with blue and white areas and some black lines" class="w-full object-cover" height="100" src="Rencana Pola Ruang.png" width="300"/>
            <img alt="Map with colorful lines and areas including pink, green, and black" class="w-full object-cover" height="100" src="Tipe Hak.png" width="300"/>
            <img alt="Map with orange and satellite view showing urban areas" class="w-full object-cover" height="100" src="Jenis Tanah.png" width="300"/>
        </div>
        <button class="bg-blue-600 hover:bg-blue-700 text-white text-sm font-normal py-2 px-5 rounded" type="button">
            Database Peta Sitaru
        </button>
        <button aria-label="Scroll to top" class="fixed bottom-16 right-6 bg-yellow-400 border-2 border-yellow-400 text-black rounded-full w-10 h-10 flex items-center justify-center hover:bg-yellow-500 z-50" onclick="window.scrollTo({top: 0, behavior: 'smooth'})" type="button">
            <i class="fas fa-chevron-up"></i>
        </button>
    </div>

    <div class="w-full px-6 md:px-12 py-10">
        <h1 class="text-3xl font-normal mb-4 text-center">Peta Bidang Tanah</h1>
        <div class="map-search-container flex items-center mx-auto mb-4">
            <input id="map-search-input" class="flex-grow rounded-l-full py-2 px-4 text-xs focus:outline-none" placeholder="Cari lokasi di peta..." type="text"/>
            <button id="map-search-button" aria-label="Search map" class="bg-yellow-400 hover:bg-yellow-500 text-white rounded-r-full p-2" type="button">
                <i class="fas fa-search text-xs"></i>
            </button>
        </div>
        <div id="mapid"></div>
    </div>
    
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>

    <script src="lib/L.Geoserver.js" type="text/javascript"></script>

    <script type="text/javascript">
        document.addEventListener('DOMContentLoaded', function() {
            console.log("DOM content loaded. Initializing map...");

            var map = L.map('mapid').setView([-7.560019594484371, 110.64402303634841], 15);
            setTimeout(function () {
    map.invalidateSize();
}, 500);;

            // OpenStreetMap tiles sebagai base layer
            var osm = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
            }).addTo(map);
            console.log("OpenStreetMap tiles added.");

            // Layer WMS dari GeoServer
            var wmsLayer = L.tileLayer.wms("http://localhost:8080/geoserver/Sudimoro123/wms", {
                layers: 'Sudimoro123:SUDIMORO', // Pastikan nama layer ini benar di GeoServer
                format: 'image/png',
                transparent: true,
                version: '1.1.0', // Atau '1.3.0' tergantung konfigurasi GeoServer Anda
                attribution: "GeoServer Data"
            });
            // Tidak langsung ditambahkan ke peta, tapi ke baseLayers/overlays

            // Legend dari GeoServer (menggunakan L.Geoserver.legend)
            // Pastikan Anda telah mengonfigurasi L.Geoserver.js dengan benar dan GeoServer menghasilkan legenda.
            var wmsLegend = L.Control.extend({
                onAdd: function(map) {
                    var div = L.DomUtil.create('div', 'info legend');
                    div.innerHTML = '<h4>Legenda</h4>' +
                                    `<img src="http://localhost:8080/geoserver/wms?REQUEST=GetLegendGraphic&VERSION=1.0.0&FORMAT=image/png&WIDTH=20&HEIGHT=20&LAYER=Sudimoro123:SUDIMORO">`; // URL legenda
                    div.style.backgroundColor = 'white';
                    div.style.padding = '10px';
                    div.style.border = '1px solid grey';
                    return div;
                },
                onRemove: function(map) {
                    // Nothing to do here
                }
            });

            // Inisialisasi baseLayers dan overlays
            var baseLayers = {
                "OpenStreetMap": osm
            };
            var overlays = {
                "Pola Ruang Sudimoro (WMS)": wmsLayer // Tambahkan layer WMS ke overlays
            };

            // Muat data GeoJSON lokal
            const geoJsonFilePath = 'data/batas_kecamatan_banten.geojson';
            console.log("Attempting to load GeoJSON from:", geoJsonFilePath);

            fetch(geoJsonFilePath)
                .then(response => {
                    console.log("GeoJSON fetch response status:", response.status);
                    if (!response.ok) {
                        throw new Error('HTTP error! status: ' + response.status + ' - Check if file exists at ' + geoJsonFilePath);
                    }
                    return response.json();
                })
                .then(data => {
                    console.log("GeoJSON data loaded:", data);
                    if (data.features && data.features.length > 0) {
                        var geoJsonLayer = L.geoJSON(data, {
                            style: function(feature) {
                                const randomColor = '#' + Math.floor(Math.random()*16777215).toString(16);
                                return {
                                    color: randomColor,
                                    weight: 2,
                                    opacity: 0.7,
                                    fillColor: randomColor,
                                    fillOpacity: 0.2
                                };
                            },
                            onEachFeature: function(feature, layer) {
                                if (feature.properties) {
                                    let popupContent = "<b>Info Area:</b><br>";
                                    for (const key in feature.properties) {
                                        if (feature.properties[key] !== null && feature.properties[key] !== undefined) {
                                            popupContent += `<b>${key}:</b> ${feature.properties[key]}<br>`;
                                        }
                                    }
                                    layer.bindPopup(popupContent);
                                }
                            }
                        });

                        // Tambahkan layer GeoJSON ke objek overlays
                        overlays["Batas Kecamatan Banten (GeoJSON)"] = geoJsonLayer; // Nama yang akan muncul di layer control
                        console.log("GeoJSON layer added to overlays.");

                    } else {
                        console.warn("GeoJSON file loaded, but it contains no features or is empty.");
                        // alert("GeoJSON file loaded, but it contains no features to display. Check the GeoJSON content.");
                    }

                    // Inisialisasi Layer Control setelah semua base dan overlay layers terdefinisi
                    L.control.layers(baseLayers, overlays).addTo(map);
                    console.log("Layer control added.");

                    // Opsional: Secara otomatis tambahkan layer GeoJSON dan WMS ke peta saat dimuat pertama kali
                    if (overlays["Batas Kecamatan Banten (GeoJSON)"]) {
                        overlays["Batas Kecamatan Banten (GeoJSON)"].addTo(map);
                    }
                    wmsLayer.addTo(map); // Tambahkan WMS layer secara default

                    // Tambahkan legenda WMS
                    new wmsLegend().addTo(map);

                })
                .catch(error => {
                    console.error('Gagal memuat atau memproses data GeoJSON:', error);
                    // alert('Gagal memuat data peta. Silakan cek konsol browser (tekan F12) untuk detail error: ' + error.message);
                });

            map.on('click', function(e) {
                
                // L.popup()
                //     .setLatLng(e.latlng)
                //     .setContent("Anda mengklik di: " + e.latlng.toString())
                //     .openOn(map);
                
            });
        });
    </script>

</body>
</html>