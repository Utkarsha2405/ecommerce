--
-- Database: `category-example`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`id`, `category_name`) VALUES
(1, 'Category1'),
(2, 'Category2'),
(3, 'Category3'),
(4, 'Category4'),
(5, 'Category5'),
(6, 'Category6'),
(7, 'Category10');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sub_category`
--

CREATE TABLE `tbl_sub_category` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `sub_category_name` varchar(255) NOT NULL,
  `image_path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_sub_category`
--

INSERT INTO `tbl_sub_category` (`id`, `category_id`, `sub_category_name`, `image_path`) VALUES
(1, 1, 'Flat', 'data/images1.jpg'),
(2, 1, 'Round', 'data/images2.jpg'),
(3, 1, 'Square', 'data/images3.jpg'),
(4, 1, 'Oval', 'data/images4.jpg'),
(6, 2, 'Checker Plate', 'data/images1.jpg'),
(7, 2, 'Satin Sheets', 'data/images2.jpg'),
(8, 2, 'Hot & Cold Sheet', 'data/images3.jpg'),
(9, 3, 'Rectangular', 'data/images4.jpg'),
(10, 3, 'Square Tubing', 'data/images5.jpg'),
(11, 3, 'Round Tubing', 'data/images1.jpg'),
(12, 3, 'Black Pipe', 'data/images2.jpg'),
(13, 4, 'Sample1', 'data/images3.jpg'),
(14, 4, 'Sample2', 'data/images4.jpg\r\n'),
(15, 5, 'Sample3', 'data/images1.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_sub_category`
--
ALTER TABLE `tbl_sub_category`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id_rel` (`category_id`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_sub_category`
--
ALTER TABLE `tbl_sub_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_sub_category`
--
ALTER TABLE `tbl_sub_category`
  ADD CONSTRAINT `tbl_sub_category_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `tbl_category` (`id`);
