
CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(80) NOT NULL,
  `name` varchar(80) NOT NULL,
  `password` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `users` (`id`, `username`, `name`, `password`) VALUES
(1, 'Kelvin', 'Kelvin Simiyu', '20210001'),
(2, 'Edwin ', 'Edwin Odhiambo', '20210002'),
(3, 'Eddy', 'Edwin Obisa', '20210003'),
(4, 'Edith', 'Edith Kimani', '20210004'),
(5, 'Faith', 'Faith Juma','20210005'),
(6, 'George Odongo','20210006'),
(7, 'Hillary Makori','20210007');

CREATE TABLE 'students'(
  'Fname' varchar(80) NOT NULL,
  'Lname' varchar(80) NOT NULL,
  'indexno' varchar(15) NOT NULL,
  'gender' varchar(10) NOT NULL,
  'DateOfBirth' varchar(100) NOT NULL,
  'school' varchar(100)NOT NULL,
);

CREATE TABLE 'results'(
  
)
