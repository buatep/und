<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wedding Invitation</title>
    <!-- <link rel="stylesheet" href="styles.css"> -->
    <style>
      body {
    margin: 0;
    padding: 0;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: flex-start;
    background: linear-gradient(to bottom, #FFCC88, #FFAA66);
    height: 100vh;
    overflow-y: auto; /* Allow vertical scrolling */
}

.section {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    width: 100%;
    max-width: 540px; /* Portrait mode 16:9 ratio for width */
    background-color: #FFF5E6;
    background-image: url('paper-texture-floral.jpg'); /* Add your paper texture image with floral pattern here */
    background-size: cover; /* Ensure it covers the section */
    background-position: center; /* Center the texture */
    background-attachment: fixed; /* Keeps the background fixed during scroll */
    border-radius: 8px;
    margin: 10px 0;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
    padding: 20px;
    text-align: center;
    position: relative;
    overflow: visible; /* Ensure content is not hidden */
    transition: transform 0.5s ease-in-out, opacity 0.5s ease-in-out;
    aspect-ratio: 9 / 16; /* 16:9 portrait aspect ratio */
    color: #4A2F2F; /* Text color to match the paper aesthetic */
}

.section::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-image: url('floral-border.png'); /* You can add a subtle floral border if you want */
    background-size: cover;
    opacity: 0.1;
    z-index: 0;
}

.section-content {
    position: relative;
    z-index: 1;
}

.header img {
    width: 120px;
    height: 120px;
    border-radius: 50%;
    border: 3px solid #D4A373;
}

.header h1 {
    font-size: 24px;
    margin: 10px 0;
    color: #4A2F2F;
}

.ayat {
    font-style: italic;
    font-size: 14px;
}

.details h2 {
    font-size: 20px;
    margin-bottom: 10px;
}

.details p {
    margin: 5px 0;
}

.button a {
    text-decoration: none;
    display: inline-block;
    padding: 10px 20px;
    background-color: #FFAA66;
    color: #FFF;
    font-weight: bold;
    border-radius: 5px;
}

.button a:hover {
    background-color: #FF8C42;
}

footer {
    font-size: 12px;
    color: #4A2F2F;
}

@keyframes fadeIn {
    from {
        opacity: 0;
        transform: translateY(20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.section:nth-child(1) {
    animation: fadeIn 0.5s ease-in-out;
}

.section:nth-child(2) {
    animation: fadeIn 0.7s ease-in-out;
}

.section:nth-child(3) {
    animation: fadeIn 0.9s ease-in-out;
}

.section:nth-child(4) {
    animation: fadeIn 1.1s ease-in-out;
}

.section:nth-child(5) {
    animation: fadeIn 1.3s ease-in-out;
}
    </style>
</head>
<body>
    <div class="section header">
        <div class="section-content">
            <img src="bride.jpg" alt="Bride">
            <h1>Jasmine & Idham</h1>
            <img src="groom.jpg" alt="Groom">
        </div>
    </div>

    <div class="section ayat">
        <div class="section-content">
            <p><i>"Dan di antara tanda-tanda (kebesaran)-Nya ialah Dia menciptakan untukmu isteri-isteri dari jenismu sendiri, supaya kamu cenderung dan merasa tenteram kepadanya, dan dijadikan-Nya di antaramu rasa kasih dan sayang. Sesungguhnya pada yang demikian itu benar-benar terdapat tanda-tanda bagi kaum yang berfikir."</i></p>
            <p><b>Surah Ar-Rum Ayat 21</b></p>
        </div>
    </div>

    <div class="section details">
        <div class="section-content">
            <h2>Bismillahirrahmanirrahim</h2>
            <p>Dengan hormat mengundang Bapak/Ibu ke pernikahan kami</p>
            <p><b>Jasmine Nurfitri Yamandharlie</b></p>
            <p>Anak dari Bapak Teguh Darmodjo & Ibu Siti Suliyah</p>
            <p><b>Idham Mucharam</b></p>
            <p>Anak dari Bapak Bambang Soegeng & Ibu Imlek Rahayuningsih</p>
        </div>
    </div>

    <div class="section details">
        <div class="section-content">
            <h2>Akad Nikah</h2>
            <p>Hari: Sabtu, 10 Agustus 2024</p>
            <p>Jam: 10:00 WIB</p>
            <p>Lokasi: Kediaman mempelai wanita</p>
            <p>Jl. Diponegoro No.38, RT 03 RW 03 Kampung Mageru, Kelurahan Sragen Tengah, Kecamatan Sragen Kota, Kabupaten Sragen, Jawa Tengah, 57211</p>
            <div class="button">
                <a href="https://goo.gl/maps/example" target="_blank">Lihat Lokasi di Google Maps</a>
            </div>
        </div>
    </div>

    <div class="section details">
        <div class="section-content">
            <h2>Konfirmasi Kehadiran</h2>
            <p>Kami sangat berbahagia atas kehadiran Anda. Silakan konfirmasi kehadiran dengan menekan tombol di bawah ini.</p>
            <div class="button">
                <a href="https://example.com/rsvp" target="_blank">Konfirmasi Hadir</a>
            </div>
        </div>
    </div>

    <footer>
        <p>Terima kasih atas doa dan kehadiran Anda. Semoga Allah SWT melimpahkan rahmat-Nya kepada kita semua.</p>
    </footer>
</body>
</html>
