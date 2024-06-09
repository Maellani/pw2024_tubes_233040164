-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 09, 2024 at 03:47 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw2024_tubes_233040164`
--

-- --------------------------------------------------------

--
-- Table structure for table `kendaraan`
--

CREATE TABLE `kendaraan` (
  `id` int NOT NULL,
  `nama` varchar(255) NOT NULL,
  `merk` varchar(255) NOT NULL,
  `spesifikasi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `tahun` char(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `harga` varchar(255) NOT NULL,
  `stok` varchar(255) NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kendaraan`
--

INSERT INTO `kendaraan` (`id`, `nama`, `merk`, `spesifikasi`, `tahun`, `harga`, `stok`, `image`) VALUES
(1, 'Calya', 'Toyota', 'Dimension : Overall Panjang / Length (mm) : 4.110	 Overall Lebar / Width (mm) : 1.655	 Overall Tinggi / Height (mm) : 1.600	 Jarak Poros Roda / Wheelbase (mm) : 2.525	 Jarak Terendah / Ground Clearance (mm) : 180	 Overhang Depan / Front (mm) : 630	 Overhang Belakang / Rear (mm) : 915 Engine : Tipe Mesin / Engine Type : 3NR-VE(1,2L)		 Daya Maksimal / Maximum Power (ps/rpm) : 88/6.000	 Bahan Bakar / Fuel Type : Bensin / 4 Silinder Sejajar	 Kapasitas Tangki / Fuel Tank Capacity (ltr) : 36 No. Of Cyls &amp; Arrangement : In-line 4 Cylinder, 16 Valve, DOCH, Dual VVT-i Isi Silinder / Displacement (cc) : 1.197 Torsi Maksimal / Maximum Torque (kgm/rpm) : 11/4.200 Daya Maksimal / Maximum Power (ps/rpm) : 88/6.000 Bahan Bakar / Fuel Type : Bensin / 4 Silinder Sejajar	 Kapasitas Tangki / Fuel Tank Capacity (ltr) : 36 Safety &amp; Security : SRS Airbag : With	 ABS, EBD, BA : With	 Parking Camera : Without	 Child Restrain System : ISO FIX:RR:2', '2024', 'Rp.170.200.000', '22', 'calya.jpg'),
(2, 'Avanza', 'Toyota', 'dimension : Overall Panjang / Length (mm) : 4.395	 Overall Lebar / Width (mm) : 1.730	 Overall Tinggi / Height (mm) : 1.665	 Jarak Poros Roda / Wheelbase (mm) : 2.750 Jarak Pijak Depan / Front Tread (mm) : 1,515 Jarak Pijak Belakang / Rear Tread (mm) : 1,510	 Jarak Terendah / Ground Clearance (mm) : 195	 Engine : Seri Mesin / Machine Serial : 1NR-VE	 Tipe Mesin / Engine Type : 4 Cylinder in-line, 16 Valve DOHC with Dual VVT-i Diameter x Langkah / Broe x Stroke (mm) : 72.5 x 80.5	 Isi Silinder / Displacement (cc) : 1,329	 Daya Maksimum / Maximum Output (ps/rpm) : 98/6,000	 Torsi Maksimum / Maximum Torque (kgm/rpm) : 12.4/4,200	 Bahan Bakar / Fuel : Sistem Injeksi Bahan Bakar Elektronik / Electronic Fuel Injection	 Kapasitas Tangki / Fuel Capacity (Liter) : 43 Safety &amp; Security : Vehicle Stability Control : With	 Hill Start Assist : With	 Seatbelt Warning : D+P+Rr No.1*3 + Rr.No 2*2	 Alarm + Immobilizer : Without	 Rear Parking Sensor : Without	 Airbag : D+P	 Pre Collision System : Without	 Front Departure Alert : Without	 Lane Departure Assist : Without	 Pedal Misoperation Control : Without	 Rear Crossing Traffic Alert : Without	 Blind Spot Monitoring : Without	 T Intouch : Without	 Isofix : With', '2024', 'Rp.239.700.000', '50', 'avanza.png'),
(41, 'Kijang Innova Zenix', 'Toyota', 'Dimension:  Overall Panjang / Length (mm) : 4.755	 Overall Lebar / Width (mm) : 1.850	 Overall Tinggi / Height (mm) : 1.795	 Jarak Poros Roda / Wheelbase (mm) : 2.850	 Ground Clearance (G/C) (mm) : 185	 Jarak Pijak Depan / Front Tread (mm) : 1.560	 Jarak Pijak Belakang / Rear Tread (mm) : 1.580 Engine : Mesin / Engine : M20A-FKS 4 cylinders, in-line 16-Valve DOHC, chain drive Dual VVT-i	 Isi Silinder / Displacement (cc) : 1.987	 Diameter x Langkah / Bore x Stroke (mm) : 80,5 x 97,6	 Compression Ratio : 13,0 : 1	 Sistem Bahan Bakar / Fuel System : Direct injection, port injection D-4S system	 Kapasitas Tangki / Fuel Tank Capacity (L) : 52	 Daya Maksimum / Maximum Power (ps/rpm) : 174 / 6600	 Torsi Maksimum / Maximum Torque (kgm/rpm) : 20,9 / 4500-4900 Safety &amp; Security : SRS Airbag : Front D+P	 Parking Sensor : With	 VSC &amp; HSA : With	 Parking camera : With	 Child Restraint System : ISOFIX + Tether	 DVR : W/O	 Toyota Safety Sense 3.0 : W/O	 Blind Spot Monitoring : W/O Wireless / Smart Door Lock : With (Smart Entry)	 Vehicle Approach Notice : W/O	 Anti Theft System : Immobilizer', '2024', 'Rp.430.300.000', '32', '66627feb73e00.png'),
(42, 'Alphard HEV', 'Toyota', 'Dimension : Panjang / Overall Length (mm) : 5,010	 Lebar / Overall Width (mm) : 1,850	 Tinggi / Overall Height (mm) : 1,945	 Wheelbase (mm) : 3,000 Engine :  Torque : 235 Nm / 23.9 kgm	 Power : 134 KW / 182 PS	 Engine : 2AR-FE (2.5 GAS)	 Transmission : CVT Interior : Seat Cover Material : Fabric	 Front Seat Function : Manual	 RR1 Seat : Captain (w/STD Headrest)/Manual	  RR2 Seat : 5:5 Split Space up Bench (w/ STD Headrest)/ Manual	 Seat Massage : w/o	 Rear Air Conditioner : With	 Minus Ion Generator : With	 Meter : AIS 12.3&quot; Full TFT Digital	 Head Up Display : w/o	 Audio &amp; Speaker : JBL 14&quot; 15SP	 Rear Seat Entertainment : 14&quot;	 FR Jack / RR Jack : USB+HDMI +HDMI	 Power Socket : 12V (120W)*1	 USB Charger : FR+Console+RR1  Safety &amp; Security : Active Safety Package : TSS 3.0	 Pre-Collision System : with	 Full Speed ACC : with	 Lane Tracing Assist : with	 PVM : with	 BSM : with + SEA (Safe Exit Assist)	 Parking Brake Support : Object + Vehicle	 Driver Monitor System : w/o	 Voice Command Power Backdoor : w/o	 Wireless Charger : w/o RR1 Seat Control Panel : Fixed Control Panel DVR Integration w/ Smartphone : w/o	 Head Lamp : LED 3 Lamps + AHB	 Front Fog Lamp : w/o	 Daytime Running Light : w/o	 Slide Door : Power with Open &amp; Close Switch	 Back Door : Power + Intermediate Stop	 Sun Roof &amp; Moon Roof : w/o	 Sun Shade : With (S/D QTR Manual)	 Outside Rear View Mirror : A+PVM+BSM+IR+HEATER	 Inner Mirror E-type (Auto) : Day &amp; Night', '2024', 'Rp.1.407.300.000', '50', '6662803655ee7.png'),
(43, 'Ertiga Hybrid Cruise', 'Yamaha', 'Spesification : Overall Length (mm) : 4395	 Overall Width (mm) : 1735	 Overall Height (mm) : 1690	 Wheelbase (mm) : 2740	 Minimum Turning Radius (m) : 5.2	 Full Tank Capacity (L) : 45	 Ground Clearance (mm) :	 180 Engine : Smart Hybrid Vehicle by Suzuki (K15B + ISG + Lithium ION Battery) Steering : Rack &amp; Pinion	 Front Suspension : MacPherson Strut With Coil Spring Rear Suspension : Torsion Beam with Coil Spring  Tire Size : 185/65 R15 Equipment : LED Day Time Running Light : -	 Electric Mirrors : Available LED Fog Lamp : -	 Automatic Air Conditioner with Heather : Available	 Cruise Control : Available Information Display Integrated Into cluster meters : Available	 Rear Window Demister : Available', '2024', 'Rp.276.200.000', '32', '6662808ce5bcf.png'),
(44, 'Grand Vitara GX', 'Yamaha', 'Spesifikasi : 1.462 L - K15C In Line 4 DUALJET Engine + SHVS (Engine Specification) Spark Ignition (ignition System) 6-Speed A/T (Transmission) 74.0 mm x 85.0 mm (Bore x Stroke) 75,8 kw/6000 rpm (Max. Power) &amp; 136,8 nm/4.400 rpm (Max. Torque) 4,345 x 1,795x 1,645 x 2,600 mm (Length/width/height/wheelbase) 215/60 R17 96H (Wheel Size) 1,190 kg (GL)/ 1,210 kg (GX) (Weight Total) MacPherson Strut and Coil Spring Type (Suspension and Spring Type), Double Action Telescopic (Shock Absorbers Type), Torsion Bar (Stabilizer System) Keamanan : SRS Front Dual Airbags, SRS Side Airbags, and SRS Curtain Airbags Side Impact Door Beams ABS with EBD Function and Brake Assist ESP® Hill Hold Control Immobilizer and Security Alarm Pedestrian Protection ISOFIX Lower Anchorage (x2) and ISOFIX Top Tether (x2) Pedal Release System Child Proof Rear Door Lock', '2024', 'Rp.388.400.000', '100', '666280cd2c104.jpg'),
(45, 'XL7 Hybrid Alpha', 'Yamaha', 'Spesifikasi : K15B (1.462 CC) 4-Cylinder 16 Valve VVT MPI(Engine Spec.) 10.5 (Compression Ratio) 177 Kw (104.7 Ps)/ 6.000 Rpm (Max. Output) 138 Nm/4400 Rpm (Max. Torque) 5 M/T And 4 A/T (Transmission Option) 195/60 R16 + Polisher Alloy Wheels (Tyre Spec.) Rack And Pinion (Steering) Ventilated Disc (Front Brake) And Drum (Rear Brake) MacPherson Strut With Coil Spring (Front Susp.) Torsion Beam With Coil Spring (Rear Susp.) Smart Hybrid Vehicle By Suzuki (SHVS) Integrated Starter Generator (ISG) Lithium-ION Battery 195/60 R16 + Black Paint Alloy Wheel Dual Tone Color Keselamatan &amp; Keamanan : SRS Front Dual Airbags ISOFIX Child Seat Anchorages Childproof Rear Door Lock Side Impact Door Beams ABS With EBD Function Reverse Parking Sensor Immobilizer LED High-Mounted Stop Lamp AT-Shift Lock/Key Interlock (AT) Security Alarm ESP® LED With Guide Me Light E-Mirror Touch Screen', '2024', 'Rp.259.400.000', '70', '666281060c802.jpg'),
(47, 'Ertiga GA-MT', 'Yamaha', 'Dimensi : Panjang Keseluruhan mm : 4.395 Lebar Keseluruhan mm : 1.735 Tinggi Keseluruhan mm : 1.690 Jarak Poros Roda mm : 2.740 Radius Putar Minimum m : 5.2 Jarak Terendah mm : 180 Kapasitas : Tempat duduk / Seating capacity : 7 Orang  Tangki bahan bakar / Fuel tank capacity : 45 Liter Bagasi3rd Row Seatback Raised : 153 Liter Bagasi3rd Row Seatback Folded : 550 Liter BagasiMax Volume : 803 Liter Mesin : Jenis : K15B, DOHC, VVT Silinder : 4 Jumlah katup : 16 Isi silinder cc : 1.462 Diameter x Langkah mm : 74,0 x 85,0 Perbandingan kompresi : 10,5 Daya Maksimum PS / rpm : 104,7/6.000 Momen puntir maksimum Nm / rpm : 138/4.400 Distribusi bahan bakar : Multipoint injectio Rangka : Sistem kemudi / Steering : Rack &amp; Pinion Suspensi / Suspension Depan / Front : MacPherson strut with coil spring Belakang / Rear : Torsion beam with coil spring Rem / Brakes Depan / Front : Ventilated disc Belakang / Rear : Drum, leading and trailing Ukuran Ban / Tyres : 185/65R15', '2024', 'Rp.232.000.000', '60', '66628707b21de.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` enum('Admin','User') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'User'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `level`) VALUES
(3, 'admin', '$2y$10$SmZlGLWMn86t7aKoS3DHtO.VK6p3QG.FsdUXk0EyYT2z1cNXY5.c6', 'Admin'),
(6, 'user', '$2y$10$PpvEMuS/gSV6axccWYTJfOElvzN0i9Su1fhymcuxeWci3P20tEbDO', 'User'),
(17, 'mae', '$2y$10$G1yeEy48scrUbs.0fkjjPe4XsH3bIFV.3lrsHmhn2IY9mJQIC6j.C', 'User');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kendaraan`
--
ALTER TABLE `kendaraan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kendaraan`
--
ALTER TABLE `kendaraan`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
