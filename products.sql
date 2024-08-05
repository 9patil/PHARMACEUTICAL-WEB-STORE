-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 07, 2024 at 02:20 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pharmacy`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `category` varchar(20) NOT NULL,
  `details` varchar(500) NOT NULL,
  `price` int(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `category`, `details`, `price`, `image`) VALUES
(24, 'Calcimax 500', 'Personal Care', 'This calcium supplement from Calcimax comes with a potency of 500 mg, it contains not just elemental Calcium but also enhancers like Vitamin D3.', 372, 'calcimax-500-health-supplement-t.jpg'),
(25, 'Scalpe Plus', 'Personal Care', 'Scalpe Plus Shampoo is a proven shampoo for the treatment of dandruff-related issues. The ingredients are based on the ketoconazole + ZPTO formula', 297, 'scalpe-plus-anti-dandruff-shampo.jpg'),
(26, 'Venusia Max', 'Personal Care', 'Dry and dull skin can take all your charm away. Do you want that to happen to you? Your answer will be no. So, get Venusia Max Intensive Moisturizing Cream for you', 549, 'venusia-max-intensive-moisturizi.jpg'),
(27, 'Stayfree Secure Pad', 'Personal Care', 'Stayfree Secure Pad Ultra-thin are half as thin as your regular sanitary pad and provide upto 100% Fluid lock. This Extra-large sanitary pad for women is flexible.', 66, 'stayfree-secure-xl-cottony-comfo.jpg'),
(28, 'Pharmeasy Biotin', 'Personal Care', 'Biotin has long been proven to have spectacular benefits for hair, nails and skin. This is a coenzyme and belongs in the B Complex of vitamins.', 384, 'pharmeasy-biotin-10000mcg-for-ha.jpg'),
(29, 'Liveasy Care Pads', 'Personal Care', 'Sanitary pads are an essential wellness product that women need to invest in throughout the year. Key to good health and hygiene.', 152, 'liveasy-care-ultra-sanitary-pads.jpg'),
(30, 'Photostable Gel', 'Personal Care', 'PROTECTS AGAINST BLUE LIGHT: Blue light, a type of high-energy visible light is emitted by several electronic devices.', 781, 'photostable-gold-spf55-sunscreen.jpg'),
(31, 'Revital H Men', 'Personal Care', 'Revital H Health Supplement capsules are nutritional supplements that contain vitamins and 9 minerals as well as Ginseng. These help to get your daily dose.', 552, 'revital-h-men-multivitamin-with.jpg'),
(32, 'I-Pill', 'Personal Care', 'I-pill tablet is an emergency contraceptive that is used to help prevent unwanted pregnancy if there has been a contraceptive failure or in the event of unprotected sexual intercourse.', 99, 'i-pill-emergency-contraceptive-p.jpg'),
(33, 'Dr.Morepen Glucometer', 'Healthcare Devices', 'This blood glucose electronic testing machine from Dr Morepen is to be used with the BG-03 strips and gives a reading of blood glucose level at the time of testing.', 602, 'dr-morepen-gluco-one-bg-03-gluco.jpg'),
(34, 'Accu-Chek Strips ', 'Healthcare Devices', 'The blood sugar levels in your body can be easily checked with Accu-Chek Active Strips. These are tested for accuracy, are easy to use daily and no manual coding is required.', 984, 'accu-chek-active-glucometer-test.jpg'),
(35, 'Pharmeasy Pill Organizer', 'Healthcare Devices', 'The PharmEasy Pill Box Organiser is an all-in-one solution for people who have a regular fuss over organising their daily medication.', 254, 'pharmeasy-digital-thermometer-2.jpg'),
(36, 'Coviself Covid Test Kit', 'Healthcare Devices', 'The COVID-19 pandemic is raging across the country and the caseload is so high that diagnostic laboratories are finding it hard to make RT-PCR coronavirus tests.', 195, 'coviself-covid-self-test-kit-2-1.jpg'),
(37, 'Morepen Glucometer Kit', 'Healthcare Devices', 'A glucometer is a medical device used to determine the approximate concentration of glucose in the blood. Dr Morepen Glucometer from the store house of Dr Morepen ensures a high level of efficiency.', 582, 'dr-morepen-bg-03-glucometer-kit.jpg'),
(38, 'Blood Pressure Monitor', 'Healthcare Devices', 'A Bp Monitor is a medical device used for monitoring blood pressure. It can be easily used at home and gives precise results. This device detects accurate systolic.', 1105, 'dr-morepen-bp-09-bp-monitor-2-16.jpg'),
(39, 'Protinex Drink', 'Health Food', 'The daily meal you eat may often give you only half the nutrition required by your body to lead an active life. Protinex is a power-packed beverage mix.', 607, 'protinex-nutritional-drink-mix-f.jpg'),
(40, 'B-Protin Powder', 'Health Food', 'B-Protin Powder is a nutritional health drink ideal for kids as well as older people. It is enriched with a blend of nutrients that ensure a continuous supply of amino acids.', 569, 'b-protin-chocolate-nutrition-sup.jpg'),
(41, 'Ensure Health Drink', 'Health Food', 'muscle strength to help you stay strong and active. New Ensure is the only complete, balanced supplement now with HMB to help build and protect muscles.', 1668, 'ensure-health-drink-chocolate-40.jpg'),
(42, 'Liveasy Protein ', 'Health Food', 'LivEasy Wellness Diabetic Protein Powder has been scientifically formulated with ingredients that have proven benefits for people with diabetes', 1187, 'liveasy-wellness-diabetic-protei.jpg'),
(43, 'Giloy Tulsi Juice', 'Health Food', 'EverHerb Giloy Tulsi Juice is made from freshly-cut Tulsi leaves and organically-grown Giloy. Tulsi is popularly known as ‘The mother medicine of nature’.', 195, 'everherb-giloy-tulsi-juice-stren.jpg'),
(44, 'Threptin Biscuits', 'Health Food', 'Threptin Nutrition Biscuits Tin of 1 Kg is loaded with nutrition. Threptin biscuits are full of energy and can be hunger-busters when you need a snack.', 1689, 'threptin-lite-vanilla-butterscot.jpg'),
(45, 'Gas O Fast Sachet', 'Ayurvedic Care', 'Problems of acidity and gas can be extremely uncomfortable and can come in the way of everyday activities. The Gas O Fast Jeera antacid sachet .', 9, 'gas-o-fast-active-jeera-antacid.jpg'),
(46, 'Liv.52 Ds Tablets', 'Ayurvedic Care', 'The Himalaya Liv 52 DS is a liver support supplement that ensures the healthy functioning of the liver. It essentially contains hepatoprotective agents.', 227, 'himalaya-liv52-ds-tablets-60s-2.jpg'),
(47, 'Zandu Relief Balm', 'Ayurvedic Care', 'Zandu balm is an iconic pain relief balm. With over 100 years of trust and expertise, Zandu balm is the perfect solution for headaches, body aches and cold.', 161, 'zandu-pain-relief-balm-bottle-of.jpg'),
(48, 'Amrutanjan Roll-On', 'Ayurvedic Care', 'Amrutanjan Advanced Back Pain Roll-On is especially meant for back pain. In our daily life, we often get sprains, stress-related headaches, even muscle pains.', 90, 'amrutanjan-advanced-back-pain-ro.jpg'),
(49, 'Dr Ortho Oil', 'Ayurvedic Care', 'Dr Ortho Oil is a blend of 8 ayurvedic herb extracts that is effective in relieving pains in various parts of the body. Be it the muscles, back, legs, shoulders or joints.', 292, 'dr-ortho-an-ayurvedic-medicine-o.jpg'),
(50, 'Zandu Pancharishta ', 'Ayurvedic Care', 'Zandu Pancharishta improves the digestive system and the overall appetite. It is made of 35 ayurvedic herbs. A unique ayurvedic digestive tonic enriched.', 138, 'zandu-pancharishta-digestive-ton.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
