-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 01, 2019 at 08:40 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `society_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `sm_flat`
--

CREATE TABLE `sm_flat` (
  `id` int(11) NOT NULL,
  `wing_id` varchar(225) NOT NULL,
  `floor_no` varchar(225) NOT NULL,
  `flat_name` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sm_flat`
--

INSERT INTO `sm_flat` (`id`, `wing_id`, `floor_no`, `flat_name`) VALUES
(526, 'A', '1', 'A101'),
(527, 'A', '1', 'A102'),
(528, 'A', '1', 'A103'),
(529, 'A', '1', 'A104'),
(530, 'A', '1', 'A105'),
(531, 'A', '1', 'A106'),
(532, 'A', '1', 'A107'),
(533, 'A', '1', 'A108'),
(534, 'A', '1', 'A109'),
(535, 'A', '1', 'A110'),
(536, 'A', '1', 'A111'),
(537, 'A', '1', 'A112'),
(538, 'A', '1', 'A113'),
(539, 'A', '1', 'A114'),
(540, 'A', '1', 'A115'),
(541, 'A', '1', 'A116'),
(542, 'A', '1', 'A117'),
(543, 'A', '1', 'A118'),
(544, 'A', '1', 'A119'),
(545, 'A', '1', 'A120'),
(546, 'A', '1', 'A121'),
(547, 'A', '1', 'A122'),
(548, 'A', '2', 'A201'),
(549, 'A', '2', 'A202'),
(550, 'A', '2', 'A203'),
(551, 'A', '2', 'A204'),
(552, 'A', '2', 'A205'),
(553, 'A', '2', 'A206'),
(554, 'A', '2', 'A207'),
(555, 'A', '2', 'A208'),
(556, 'A', '2', 'A209'),
(557, 'A', '2', 'A210'),
(558, 'A', '2', 'A211'),
(559, 'A', '2', 'A212'),
(560, 'A', '2', 'A213'),
(561, 'A', '2', 'A214'),
(562, 'A', '2', 'A215'),
(563, 'A', '2', 'A216'),
(564, 'A', '2', 'A217'),
(565, 'A', '2', 'A218'),
(566, 'A', '2', 'A219'),
(567, 'A', '2', 'A220'),
(568, 'A', '2', 'A221'),
(569, 'A', '2', 'A222'),
(570, 'A', '3', 'A301'),
(571, 'A', '3', 'A302'),
(572, 'A', '3', 'A303'),
(573, 'A', '3', 'A304'),
(574, 'A', '3', 'A305'),
(575, 'A', '3', 'A306'),
(576, 'A', '3', 'A307'),
(577, 'A', '3', 'A308'),
(578, 'A', '3', 'A309'),
(579, 'A', '3', 'A310'),
(580, 'A', '3', 'A311'),
(581, 'A', '3', 'A312'),
(582, 'A', '3', 'A313'),
(583, 'A', '3', 'A314'),
(584, 'A', '3', 'A315'),
(585, 'A', '3', 'A316'),
(586, 'A', '3', 'A317'),
(587, 'A', '3', 'A318'),
(588, 'A', '3', 'A319'),
(589, 'A', '3', 'A320'),
(590, 'A', '3', 'A321'),
(591, 'A', '3', 'A322'),
(592, 'A', '4', 'A401'),
(593, 'A', '4', 'A402'),
(594, 'A', '4', 'A403'),
(595, 'A', '4', 'A404'),
(596, 'A', '4', 'A405'),
(597, 'A', '4', 'A406'),
(598, 'A', '4', 'A407'),
(599, 'A', '4', 'A408'),
(600, 'A', '4', 'A409'),
(601, 'A', '4', 'A410'),
(602, 'A', '4', 'A411'),
(603, 'A', '4', 'A412'),
(604, 'A', '4', 'A413'),
(605, 'A', '4', 'A414'),
(606, 'A', '4', 'A415'),
(607, 'A', '4', 'A416'),
(608, 'A', '4', 'A417'),
(609, 'A', '4', 'A418'),
(610, 'A', '4', 'A419'),
(611, 'A', '4', 'A420'),
(612, 'A', '4', 'A421'),
(613, 'A', '4', 'A422'),
(614, 'A', '5', 'A501'),
(615, 'A', '5', 'A502'),
(616, 'A', '5', 'A503'),
(617, 'A', '5', 'A504'),
(618, 'A', '5', 'A505'),
(619, 'A', '5', 'A506'),
(620, 'A', '5', 'A507'),
(621, 'A', '5', 'A508'),
(622, 'A', '5', 'A509'),
(623, 'A', '5', 'A510'),
(624, 'A', '5', 'A511'),
(625, 'A', '5', 'A512'),
(626, 'A', '5', 'A513'),
(627, 'A', '5', 'A514'),
(628, 'A', '5', 'A515'),
(629, 'A', '5', 'A516'),
(630, 'A', '5', 'A517'),
(631, 'A', '5', 'A518'),
(632, 'A', '5', 'A519'),
(633, 'A', '5', 'A520'),
(634, 'A', '5', 'A521'),
(635, 'A', '5', 'A522'),
(636, 'A', '6', 'A601'),
(637, 'A', '6', 'A602'),
(638, 'A', '6', 'A603'),
(639, 'A', '6', 'A604'),
(640, 'A', '6', 'A605'),
(641, 'A', '6', 'A606'),
(642, 'A', '6', 'A607'),
(643, 'A', '6', 'A608'),
(644, 'A', '6', 'A609'),
(645, 'A', '6', 'A610'),
(646, 'A', '6', 'A611'),
(647, 'A', '6', 'A612'),
(648, 'A', '6', 'A613'),
(649, 'A', '6', 'A614'),
(650, 'A', '6', 'A615'),
(651, 'A', '6', 'A616'),
(652, 'A', '6', 'A617'),
(653, 'A', '6', 'A618'),
(654, 'A', '6', 'A619'),
(655, 'A', '6', 'A620'),
(656, 'A', '6', 'A621'),
(657, 'A', '6', 'A622'),
(658, 'B', '1', 'B101'),
(659, 'B', '1', 'B102'),
(660, 'B', '1', 'B103'),
(661, 'B', '1', 'B104'),
(662, 'B', '1', 'B105'),
(663, 'B', '1', 'B106'),
(664, 'B', '1', 'B107'),
(665, 'B', '1', 'B108'),
(666, 'B', '1', 'B109'),
(667, 'B', '1', 'B110'),
(668, 'B', '1', 'B111'),
(669, 'B', '1', 'B112'),
(670, 'B', '1', 'B113'),
(671, 'B', '1', 'B114'),
(672, 'B', '1', 'B115'),
(673, 'B', '1', 'B116'),
(674, 'B', '1', 'B117'),
(675, 'B', '1', 'B118'),
(676, 'B', '1', 'B119'),
(677, 'B', '1', 'B120'),
(678, 'B', '2', 'B201'),
(679, 'B', '2', 'B202'),
(680, 'B', '2', 'B203'),
(681, 'B', '2', 'B204'),
(682, 'B', '2', 'B205'),
(683, 'B', '2', 'B206'),
(684, 'B', '2', 'B207'),
(685, 'B', '2', 'B208'),
(686, 'B', '2', 'B209'),
(687, 'B', '2', 'B210'),
(688, 'B', '2', 'B211'),
(689, 'B', '2', 'B212'),
(690, 'B', '2', 'B213'),
(691, 'B', '2', 'B214'),
(692, 'B', '2', 'B215'),
(693, 'B', '2', 'B216'),
(694, 'B', '2', 'B217'),
(695, 'B', '2', 'B218'),
(696, 'B', '2', 'B219'),
(697, 'B', '2', 'B220'),
(698, 'B', '3', 'B301'),
(699, 'B', '3', 'B302'),
(700, 'B', '3', 'B303'),
(701, 'B', '3', 'B304'),
(702, 'B', '3', 'B305'),
(703, 'B', '3', 'B306'),
(704, 'B', '3', 'B307'),
(705, 'B', '3', 'B308'),
(706, 'B', '3', 'B309'),
(707, 'B', '3', 'B310'),
(708, 'B', '3', 'B311'),
(709, 'B', '3', 'B312'),
(710, 'B', '3', 'B313'),
(711, 'B', '3', 'B314'),
(712, 'B', '3', 'B315'),
(713, 'B', '3', 'B316'),
(714, 'B', '3', 'B317'),
(715, 'B', '3', 'B318'),
(716, 'B', '3', 'B319'),
(717, 'B', '3', 'B320'),
(718, 'B', '4', 'B401'),
(719, 'B', '4', 'B402'),
(720, 'B', '4', 'B403'),
(721, 'B', '4', 'B404'),
(722, 'B', '4', 'B405'),
(723, 'B', '4', 'B406'),
(724, 'B', '4', 'B407'),
(725, 'B', '4', 'B408'),
(726, 'B', '4', 'B409'),
(727, 'B', '4', 'B410'),
(728, 'B', '4', 'B411'),
(729, 'B', '4', 'B412'),
(730, 'B', '4', 'B413'),
(731, 'B', '4', 'B414'),
(732, 'B', '4', 'B415'),
(733, 'B', '4', 'B416'),
(734, 'B', '4', 'B417'),
(735, 'B', '4', 'B418'),
(736, 'B', '4', 'B419'),
(737, 'B', '4', 'B420'),
(738, 'B', '5', 'B501'),
(739, 'B', '5', 'B502'),
(740, 'B', '5', 'B503'),
(741, 'B', '5', 'B504'),
(742, 'B', '5', 'B505'),
(743, 'B', '5', 'B506'),
(744, 'B', '5', 'B507'),
(745, 'B', '5', 'B508'),
(746, 'B', '5', 'B509'),
(747, 'B', '5', 'B510'),
(748, 'B', '5', 'B511'),
(749, 'B', '5', 'B512'),
(750, 'B', '5', 'B513'),
(751, 'B', '5', 'B514'),
(752, 'B', '5', 'B515'),
(753, 'B', '5', 'B516'),
(754, 'B', '5', 'B517'),
(755, 'B', '5', 'B518'),
(756, 'B', '5', 'B519'),
(757, 'B', '5', 'B520'),
(758, 'B', '6', 'B601'),
(759, 'B', '6', 'B602'),
(760, 'B', '6', 'B603'),
(761, 'B', '6', 'B604'),
(762, 'B', '6', 'B605'),
(763, 'B', '6', 'B606'),
(764, 'B', '6', 'B607'),
(765, 'B', '6', 'B608'),
(766, 'B', '6', 'B609'),
(767, 'B', '6', 'B610'),
(768, 'B', '6', 'B611'),
(769, 'B', '6', 'B612'),
(770, 'B', '6', 'B613'),
(771, 'B', '6', 'B614'),
(772, 'B', '6', 'B615'),
(773, 'B', '6', 'B616'),
(774, 'B', '6', 'B617'),
(775, 'B', '6', 'B618'),
(776, 'B', '6', 'B619'),
(777, 'B', '6', 'B620');

-- --------------------------------------------------------

--
-- Table structure for table `sm_floor`
--

CREATE TABLE `sm_floor` (
  `id` int(11) NOT NULL,
  `floor_name` varchar(225) NOT NULL,
  `floor_no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sm_floor`
--

INSERT INTO `sm_floor` (`id`, `floor_name`, `floor_no`) VALUES
(2, 'a', 0),
(3, 'sdff', 6);

-- --------------------------------------------------------

--
-- Table structure for table `sm_info`
--

CREATE TABLE `sm_info` (
  `id` int(11) NOT NULL,
  `name` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `number` int(11) NOT NULL,
  `address` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `cpassword` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sm_info`
--

INSERT INTO `sm_info` (`id`, `name`, `email`, `number`, `address`, `password`, `cpassword`) VALUES
(1, 'MIKE MORROW', 'crisysmike@gmail.com', 2147483647, '', '123456', '123456'),
(2, 'krishna', 'ky24042611@gmail.com', 1234567890, 'indore', 'nanu1234', 'nanu1234');

-- --------------------------------------------------------

--
-- Table structure for table `sm_maintenance`
--

CREATE TABLE `sm_maintenance` (
  `id` int(11) NOT NULL,
  `owner_name` varchar(225) DEFAULT NULL,
  `flat` varchar(225) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` varchar(225) NOT NULL,
  `month` varchar(225) NOT NULL,
  `year` varchar(225) NOT NULL,
  `type` varchar(225) NOT NULL,
  `category` varchar(225) NOT NULL,
  `amount` int(11) NOT NULL,
  `watercharge` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `description` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sm_maintenance`
--

INSERT INTO `sm_maintenance` (`id`, `owner_name`, `flat`, `date`, `status`, `month`, `year`, `type`, `category`, `amount`, `watercharge`, `total`, `description`) VALUES
(37, 'harshita', 'A203', '2019-04-30 12:41:29', 'paid', 'january,february', '2018', '', '', 400, 100, 500, ''),
(38, 'krishna', 'A101', '2019-04-30 13:10:38', 'paid', 'january,february', '2018', '', '', 400, 78, 478, ''),
(39, NULL, NULL, '2019-05-01 06:11:10', '', 'january,february', '2017', 'others', 'partyhall', 5454, 0, 5454, 'rrtyrty');

-- --------------------------------------------------------

--
-- Table structure for table `sm_owner`
--

CREATE TABLE `sm_owner` (
  `id` int(11) NOT NULL,
  `owner_name` varchar(225) NOT NULL,
  `number` int(11) NOT NULL,
  `email` varchar(225) NOT NULL,
  `wing_id` varchar(225) NOT NULL,
  `floor` varchar(225) NOT NULL,
  `flatname` varchar(225) NOT NULL,
  `amount` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sm_owner`
--

INSERT INTO `sm_owner` (`id`, `owner_name`, `number`, `email`, `wing_id`, `floor`, `flatname`, `amount`) VALUES
(7, 'krishna', 2147483647, 'reneenolan@shaw.ca', 'A', '1', 'A101', '200'),
(8, 'harshita', 446047613, 'info@acecare.ca', 'A', '2', 'A203', '200'),
(9, 'Naivedya', 2147483647, 'reneenolan@shaw.ca', 'A', '2', 'A215', '300'),
(10, 'aaaa', 2147483647, 'reneenolan@shaw.ca', 'B', '2', 'B204', '400'),
(11, 'dgfdgdfg', 2147483647, 'info@acecare.ca', 'B', '4', 'B410', '500');

-- --------------------------------------------------------

--
-- Table structure for table `sm_wing`
--

CREATE TABLE `sm_wing` (
  `id` int(11) NOT NULL,
  `unique_id` varchar(225) NOT NULL,
  `name` varchar(225) NOT NULL,
  `floor` int(11) NOT NULL,
  `flat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sm_wing`
--

INSERT INTO `sm_wing` (`id`, `unique_id`, `name`, `floor`, `flat`) VALUES
(57, 'A', 'Silver', 6, 22),
(58, 'B', 'Diamond Square', 6, 20);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sm_flat`
--
ALTER TABLE `sm_flat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sm_floor`
--
ALTER TABLE `sm_floor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sm_info`
--
ALTER TABLE `sm_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sm_maintenance`
--
ALTER TABLE `sm_maintenance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sm_owner`
--
ALTER TABLE `sm_owner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sm_wing`
--
ALTER TABLE `sm_wing`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sm_flat`
--
ALTER TABLE `sm_flat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=778;
--
-- AUTO_INCREMENT for table `sm_floor`
--
ALTER TABLE `sm_floor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `sm_info`
--
ALTER TABLE `sm_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `sm_maintenance`
--
ALTER TABLE `sm_maintenance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT for table `sm_owner`
--
ALTER TABLE `sm_owner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `sm_wing`
--
ALTER TABLE `sm_wing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
