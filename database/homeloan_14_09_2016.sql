SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;


DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `createed_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

INSERT INTO `admin` (`id`, `username`, `password`, `createed_on`) VALUES
(1, 'admin', 'cc03e747a6afbbcbf8be7668acfebee5', '2016-03-16 23:31:21');

DROP TABLE IF EXISTS `loan_opportunity`;
CREATE TABLE IF NOT EXISTS `loan_opportunity` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `projectName` varchar(250) NOT NULL,
  `city` varchar(250) NOT NULL,
  `state` varchar(250) NOT NULL,
  `ltv` int(11) NOT NULL,
  `apr` int(11) NOT NULL,
  `maturityDate` varchar(250) NOT NULL,
  `penalty` varchar(250) NOT NULL,
  `agent` varchar(250) NOT NULL,
  `exitTerm` varchar(250) NOT NULL,
  `purpose` varchar(250) NOT NULL,
  `location` varchar(250) NOT NULL,
  `address` varchar(250) NOT NULL,
  `loanAmount` int(11) NOT NULL,
  `term` varchar(250) NOT NULL,
  `grossApr` int(11) NOT NULL,
  `date` varchar(250) NOT NULL,
  `closingDate` varchar(250) NOT NULL,
  `agentUrl` varchar(250) NOT NULL,
  `security` varchar(250) NOT NULL,
  `image` varchar(250) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `inactive` int(11) NOT NULL DEFAULT '0',
  `funded` int(11) NOT NULL,
  `completed` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

INSERT INTO `loan_opportunity` (`id`, `projectName`, `city`, `state`, `ltv`, `apr`, `maturityDate`, `penalty`, `agent`, `exitTerm`, `purpose`, `location`, `address`, `loanAmount`, `term`, `grossApr`, `date`, `closingDate`, `agentUrl`, `security`, `image`, `created_on`, `inactive`, `funded`, `completed`) VALUES
(1, 'Project Name', 'Mumbai', 'Maharashtra', 100, 100, '03/21/2016', 'penalty', 'agent name', 'exit terms', 'purpose', 'location', 'address', 1000, 'terms', 100, '03/30/2016', '03/31/2016', 'http://www.testsite.dev123', 'security', 'bnbn4c58.jpg', '2016-03-21 22:53:22', 0, 1, 1),
(2, 'Test 1234', 'test', 'Maharashtra', 0, 0, '03/31/2016', '123', 'test', 'test', 'test', 'test', 'test', 123, '2', 0, '03/22/2016', '03/31/2016', 'http://www.google.com', 'test', '5mavuy8jxh.jpg', '2016-03-30 19:06:40', 1, 0, 0),
(3, 'Opportunity 1', 'Vashi', 'Maharashtra', 100, 12, '09/30/2016', '123', 'Test', 'Terms and conditions123', 'test purpose123', 'Mumbai', 'Mumbai', 1000, '2', 12, '09/28/2016', '10/12/2016', 'http://test.com', '159357', 'BSB_ShowMeTheMeaning4tcj.jpg', '2016-09-12 17:34:15', 0, 0, 0);

DROP TABLE IF EXISTS `loan_opportunity_documents`;
CREATE TABLE IF NOT EXISTS `loan_opportunity_documents` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lo_id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `type` varchar(250) NOT NULL,
  `file` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

INSERT INTO `loan_opportunity_documents` (`id`, `lo_id`, `title`, `type`, `file`) VALUES
(1, 1, 'document1', 'type1', 'document1.txt'),
(2, 1, 'document2', 'type2', 'document2.txt'),
(3, 2, 'doc', 'doc', 'doc.doc'),
(4, 3, 'test1', 'test1', 'test1.jpg');

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `emailId` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `resetpasswordlink` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

INSERT INTO `user` (`id`, `emailId`, `password`, `resetpasswordlink`) VALUES
(1, 'test@gmail.com', 'cc03e747a6afbbcbf8be7668acfebee5', ''),
(2, 'test123@gmail.com', 'cc03e747a6afbbcbf8be7668acfebee5', NULL);

DROP TABLE IF EXISTS `users_opportunity_investment`;
CREATE TABLE IF NOT EXISTS `users_opportunity_investment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `opportunity_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

INSERT INTO `users_opportunity_investment` (`id`, `opportunity_id`, `user_id`, `amount`) VALUES
(1, 1, 1, 500);

DROP TABLE IF EXISTS `user_details`;
CREATE TABLE IF NOT EXISTS `user_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `firstname` varchar(250) NOT NULL,
  `lastname` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `mobile_number` varchar(100) NOT NULL,
  `username` varchar(250) NOT NULL,
  `state` varchar(250) NOT NULL,
  `city` varchar(250) NOT NULL,
  `zipcode` int(11) NOT NULL,
  `address` varchar(250) NOT NULL,
  `account_type` varchar(250) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

INSERT INTO `user_details` (`id`, `user_id`, `firstname`, `lastname`, `email`, `mobile_number`, `username`, `state`, `city`, `zipcode`, `address`, `account_type`, `created_on`) VALUES
(1, 1, 'firstname', 'lastname', 'test@gmail.com', '9999999999', 'testuser123', 'Maharashtra', 'Chennai', 123456, 'test address', 'Corporate', '2016-03-12 11:23:19');
SET FOREIGN_KEY_CHECKS=1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
