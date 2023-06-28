<?php
// Mendapatkan tipe data yang diminta
$type = $_GET['type'];

// Mendapatkan kunci API Anda
$apiKey = 'aa2dc37907d6b7692e797459a79db68d';

// Cek tipe data yang diminta dan jalankan logika yang sesuai
switch ($type) {
    case 'province':
        getProvinces();
        break;
    case 'city':
        $provinceId = $_GET['province_id'];
        getCities($provinceId);
        break;
    case 'shipping':
        $cityId = $_GET['city_id'];
        getShippingServices($cityId);
        break;
    case 'cost':
        $serviceId = $_GET['service_id'];
        getShippingCost($serviceId);
        break;
        // case 'resi':
        //     $waybillNumber = $_GET['waybill_number'];
        //     getWaybill($waybillNumber);
        //     break;
}

// Fungsi untuk mengambil daftar provinsi dari API RajaOngkir
function getProvinces()
{
    global $apiKey;

    $url = 'https://api.rajaongkir.com/starter/province';

    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'key: ' . $apiKey
    ]);

    $response = curl_exec($ch);
    curl_close($ch);

    $data = json_decode($response, true);

    if ($data['rajaongkir']['status']['code'] === 200) {
        $provinces = $data['rajaongkir']['results'];

        // Menampilkan opsi provinsi
        foreach ($provinces as $province) {
            echo '<option value="' . $province['province_id'] . '">' . $province['province'] . '</option>';
        }
    } else {
        echo '<option value="">Failed to fetch provinces</option>';
    }
}

// Fungsi untuk mengambil daftar kota berdasarkan id provinsi dari API RajaOngkir
function getCities($provinceId)
{
    global $apiKey;

    $url = 'https://api.rajaongkir.com/starter/city?province=' . $provinceId;

    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'key: ' . $apiKey
    ]);

    $response = curl_exec($ch);
    curl_close($ch);

    $data = json_decode($response, true);

    if ($data['rajaongkir']['status']['code'] === 200) {
        $cities = $data['rajaongkir']['results'];

        // Menampilkan opsi kota
        foreach ($cities as $city) {
            echo '<option value="' . $city['city_id'] . '">' . $city['city_name'] . '</option>';
        }
    } else {
        echo '<option value="">Failed to fetch cities</option>';
    }
}

// Fungsi untuk mengambil daftar layanan pengiriman berdasarkan id kota dari API RajaOngkir
function getShippingServices($cityId)
{
    global $apiKey;

    $url = 'https://api.rajaongkir.com/starter/cost';

    $data = [
        'origin' => 501, // ID kota asal, bisa diubah sesuai kebutuhan
        'destination' => $cityId,
        'weight' => 1000, // Berat dalam gram, bisa diubah sesuai kebutuhan
        'courier' => 'jne' // Nama kurir, bisa diubah sesuai kebutuhan (jne, tiki, pos)
    ];

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'key: ' . $apiKey
    ]);

    $response = curl_exec($ch);
    curl_close($ch);

    $data = json_decode($response, true);

    if ($data['rajaongkir']['status']['code'] === 200) {
        $services = $data['rajaongkir']['results'][0]['costs'];

        // Menampilkan opsi layanan pengiriman
        foreach ($services as $service) {
            echo '<option value="' . $service['service'] . '">' . $service['service'] . ' - ' . $service['description'] . '</option>';
        }
    } else {
        echo '<option value="">Failed to fetch shipping services</option>';
    }
}

// Fungsi untuk mengambil biaya pengiriman berdasarkan id layanan dari API RajaOngkir
function getShippingCost($serviceId)
{
    global $apiKey;

    $url = 'https://api.rajaongkir.com/starter/cost';

    $data = [
        'origin' => 501, // ID kota asal, bisa diubah sesuai kebutuhan
        'destination' => 152, // ID kota tujuan, bisa diubah sesuai kebutuhan
        'weight' => 1000, // Berat dalam gram, bisa diubah sesuai kebutuhan
        'courier' => 'jne', // Nama kurir, bisa diubah sesuai kebutuhan (jne, tiki, pos)
        'service' => $serviceId // ID layanan pengiriman, bisa diubah sesuai pilihan pengguna
    ];

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'key: ' . $apiKey
    ]);

    $response = curl_exec($ch);
    curl_close($ch);

    $data = json_decode($response, true);

    if ($data['rajaongkir']['status']['code'] === 200) {
        $cost = $data['rajaongkir']['results'][0]['costs'][0]['cost'][0]['value'];

        echo $cost;
    } else {
        echo 'Failed to fetch shipping cost';
    }
}

// function getWaybill($waybillNumber)
// {
//     global $apiKey;

//     $url = 'https://api.rajaongkir.com/starter/waybill';

//     $data = [
//         'waybill' => $waybillNumber,
//         'courier' => 'jne' // Ganti dengan kurir yang sesuai
//     ];

//     $ch = curl_init();
//     curl_setopt($ch, CURLOPT_URL, $url);
//     curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
//     curl_setopt($ch, CURLOPT_POST, 1);
//     curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
//     curl_setopt($ch, CURLOPT_HTTPHEADER, [
//         'key: ' . $apiKey
//     ]);

//     $response = curl_exec($ch);
//     curl_close($ch);

//     $data = json_decode($response, true);

//     if ($data['rajaongkir']['status']['code'] === 200) {
//         // Menampilkan informasi resi
//         $deliveryStatus = $data['rajaongkir']['result']['delivery_status']['status'];
//         echo 'Delivery Status: ' . $deliveryStatus;

//         // Tampilkan detail pengiriman
//         $manifests = $data['rajaongkir']['result']['manifest'];
//         foreach ($manifests as $manifest) {
//             $manifestDate = $manifest['manifest_date'];
//             $manifestTime = $manifest['manifest_time'];
//             $manifestDescription = $manifest['manifest_description'];
//             echo '<br>';
//             echo $manifestDate . ' ' . $manifestTime . ': ' . $manifestDescription;
//         }
//     } else {
//         echo 'Failed to fetch waybill information';
//     }
// }
