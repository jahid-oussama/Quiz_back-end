-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 04 jan. 2023 à 19:32
-- Version du serveur : 10.4.25-MariaDB
-- Version de PHP : 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `quizizz`
--

-- --------------------------------------------------------

--
-- Structure de la table `answers`
--

CREATE TABLE `answers` (
  `id` int(11) NOT NULL,
  `answer` varchar(255) NOT NULL,
  `type` int(11) NOT NULL,
  `q_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `answers`
--

INSERT INTO `answers` (`id`, `answer`, `type`, `q_id`) VALUES
(197, 'Amazon EC2 costs are billed on a monthly basis', 0, 1),
(198, 'Users retain full administrative access to their Amazon EC2 instances', 0, 1),
(199, 'Amazon EC2 instances can be launched on demand when needed', 1, 1),
(200, 'Users can permanently run enough instances to handle peak workloads', 0, 1),
(201, 'AWS Storage Gateway', 0, 2),
(202, 'AWS Database Migration Service (AWS DMS)', 1, 2),
(203, 'Amazon EC2', 0, 2),
(204, 'Amazon AppStream 2.0', 0, 2),
(205, 'AWS Config', 0, 3),
(206, ' AWS OpsWorks', 0, 3),
(207, 'AWS SDK', 0, 3),
(208, 'AWS Marketplace', 1, 3),
(209, ' AWS Config', 0, 4),
(210, 'Amazon Route 53', 0, 4),
(211, 'AWS Direct Connect', 0, 4),
(212, 'Amazon Virtual Private Cloud (Amazon VPC)', 1, 4),
(213, 'Configuring third-party applications', 0, 5),
(214, 'Maintaining physical hardware', 1, 5),
(215, 'Securing application access and data', 0, 5),
(216, ' Managing guest operating systems', 0, 5),
(217, 'AWS Regions', 0, 6),
(218, 'Edge locations', 1, 6),
(219, ' Availability Zones', 0, 6),
(220, 'Virtual Private Cloud (VPC)', 0, 6),
(221, ' Use Amazon Cloud Directory', 0, 7),
(222, 'Audit AWS Identity and Access Management (IAM) roles', 0, 7),
(223, 'Enable multi-factor authentication', 1, 7),
(224, 'Enable AWS CloudTrail', 0, 7),
(225, 'AWS Trusted Advisor', 0, 8),
(226, 'AWS CloudTrail', 1, 8),
(227, 'AWS X-Ray', 0, 8),
(228, 'AWS Identity and Access Management (AWS IAM)', 0, 8),
(229, 'Amazon Simple Notification Service (Amazon SNS)', 1, 9),
(230, 'AWS CloudTrail', 0, 9),
(231, 'AWS Trusted Advisor', 0, 9),
(232, 'Amazon Route 53', 0, 9),
(233, 'AWS Trusted Advisor', 0, 10),
(234, 'AWS Identity and Access Management (IAM)', 0, 10),
(235, 'AWS Billing Console', 0, 10),
(236, 'AWS Acceptable Use Policy', 1, 10);

-- --------------------------------------------------------

--
-- Structure de la table `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `question` varchar(255) NOT NULL,
  `justification` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `questions`
--

INSERT INTO `questions` (`id`, `question`, `justification`) VALUES
(1, 'Why is AWS more economical than traditional data centers for applications with varying compute \r\nworkloads?', 'C – The ability to launch instances on demand when needed allows users to launch and terminate instances in  response to a varying workload. This is a more economical practice than purchasing enough on-premises servers  to handle the peak load.'),
(2, 'Which AWS service would simplify the migration of a database to AWS?', 'B – AWS DMS helps users migrate databases to AWS quickly and securely. The source database remains  fully operational during the migration, minimizing downtime to applications that rely on the database. AWS DMS can migrate data to and from most widely used commercial and open-source databases.'),
(3, 'Which AWS offering enables users to find, buy, and immediately start using software solutions in their \r\nAWS environment?', 'D – AWS Marketplace is a digital catalog with thousands of software listings from independent software  vendors that makes it easy to find, test, buy, and deploy software that runs on AWS.'),
(4, 'Which AWS networking service enables a company to create a virtual network within AWS?', 'D – Amazon VPC lets users provision a logically isolated section of the AWS Cloud where users can launch  AWS resources in a virtual network that they define'),
(5, 'Which of the following is an AWS responsibility under the AWS shared responsibility model?\r\n', 'B – Maintaining physical hardware is an AWS responsibility under the AWS shared responsibility model.'),
(6, 'Which of the following is an AWS responsibility under the AWS shared responsibility model?\r\n', 'B – To deliver content to users with lower latency, Amazon CloudFront uses a global network of points of  presence (edge locations and regional edge caches) worldwide.'),
(7, 'How would a system administrator add an additional layer of login security to a user\'s AWS \r\nManagement Console?', 'C – Multi-factor authentication (MFA) is a simple best practice that adds an extra layer of protection on top of a  username and password. With MFA enabled, when a user signs in to an AWS Management Console, they will be  prompted for their username and password (the first factor—what they know), as well as for an authentication  code from their MFA device (the second factor—what they have). Taken together, these multiple factors provide  increased security for AWS account settings and resources.'),
(8, ' Which service can identify the user that made the API call when an Amazon EC2 instance is \r\nterminated?', 'B – AWS CloudTrail helps users enable governance, compliance, and operational and risk auditing of their AWS accounts. Actions taken by a user, role, or an AWS service are recorded as events in CloudTrail. Events  include actions taken in the AWS Management Console, AWS Command Line Interface (CLI), and AWS SDKs  and APIs.'),
(9, 'Which service would be used to send alerts based on Amazon CloudWatch alarms?', 'A – Amazon SNS and Amazon CloudWatch are integrated so users can collect, view, and analyze metrics for  every active SNS. Once users have configured CloudWatch for Amazon SNS, they can gain better insight into the  performance of their Amazon SNS topics, push notifications, and SMS deliveries'),
(10, 'Where can a user find information about prohibited actions on the AWS infrastructure?', 'D – The AWS Acceptable Use Policy provides information regarding prohibited actions on the AWS  infrastructure. ');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `q_id` (`q_id`);

--
-- Index pour la table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `answers`
--
ALTER TABLE `answers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=237;

--
-- AUTO_INCREMENT pour la table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `answers`
--
ALTER TABLE `answers`
  ADD CONSTRAINT `answers_ibfk_1` FOREIGN KEY (`q_id`) REFERENCES `questions` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
