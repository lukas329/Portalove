-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hostiteľ: localhost
-- Čas generovania: Pi 02.Dec 2022, 17:41
-- Verzia serveru: 10.4.21-MariaDB
-- Verzia PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databáza: `itProjekt`
--

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `nadpis` varchar(45) COLLATE utf8mb4_slovak_ci NOT NULL,
  `text` text COLLATE utf8mb4_slovak_ci NOT NULL,
  `fotka` varchar(1024) COLLATE utf8mb4_slovak_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_slovak_ci;

--
-- Sťahujem dáta pre tabuľku `articles`
--

INSERT INTO `articles` (`id`, `nadpis`, `text`, `fotka`) VALUES
(1, 'Bezpečnosť na internete', 'Či už hovoríme o hesle na sociálnu sieť alebo o hesle do aplikácie zdravotnej poisťovne, každé by malo byť dostatočne silné . Odborníci na online bezpečnosť odporúčajú, aby ste nepoužívali jedno rovnaké heslo všade, ale strategicky rozložili riziko na viaceré. Ale ako nastaviť silné heslo? Také, ktoré má minimálne 8 znakov (ak to aplikácia dovoľuje), obsahuje čísla, malé a veľké písmená a ideálne aj špeciálne znaky.\r\nPre väčšiu bezpečnosť na internete vám odporúčame, aby ste si heslá neukladali do pamäte prehliadača a ani na cloud či inú online platformu. Na zapísanie použite radšej obyčajný papier a pero. Najlepšie však urobíte, ak si tie najdôležitejšie (do mobilnej aplikácie banky alebo na e-mail) zapamätáte.', 'https://images.pexels.com/photos/39624/padlock-lock-chain-key-39624.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2'),
(2, 'Serverless Computing', 'Posledné dve desaťročia pribudlo v IT svete mnoho inovácií, ako sú napríklad virtuálne servery, cloud computing a kontajnerizácia. Vďaka nim nie je nutné uvažovať na akom fyzickom stroji bežia systémy. „Bezserverová“ architektúra zvyčajne označovaná ako „serverless“ je čoraz populárnejšia, nakoľko používateľ nepotrebuje rozumieť hardvéru alebo operačnému systému, na ktorom beží kód, keďže sa za neho o všetko postará poskytovateľ služieb.', 'https://www.digmia.com/images/serverless.jpg'),
(3, 'Multicloud', 'Multicloudový model v IT je čoraz viac využívaný, nárast tohto trendu pozorujeme u našich klientov a potvrdzujú to aj prieskumy. Až 72% podnikov už využíva dvoch rôznych IaaS poskytovateľov, pričom minulý rok to bolo 57%. Rozhodli sme sa preto napísať pár slov k tejto téme.\r\n\r\nČo to ten multicloud vlastne je?\r\nMulticloud sa charakterizuje ako model cloud computingu, pri ktorom sa využívajú dva a viaceré public alebo private cloudy, prípadne ich kombinácia na distribúciu aplikácií a služieb.', 'https://www.digmia.com/images/multicloud.jpg'),
(4, 'Towercom', 'Towercom má poprednú pozíciu na Slovensku v rámci bezdrôtovej distribúcie televízneho a rozhlasového signálu ako aj poskytovania vežovej infraštruktúry. Zároveň sa snaží prinášať nové služby založené na technológiách obojsmernej dátovej komunikácie, k čomu je nevyhnutná robustná a stabilná CORE infraštruktúra.\r\n\r\nPožiadavky klienta:\r\n\r\nPrimárnym cieľom tohto projektu bolo vybudovať novú stabilnú a škálovateľnú ISP CORE a Edge infraštruktúru pre prenos multicastov (streamov) a využiť aj existujúcu infraštruktúru na poskytovanie nových dátových služieb a v neposlednom rade sa následne stať aj ISP providerom. Základným predpokladom pre kvalitné a efektívne poskytovanie ethernetových služieb nielen pre budúcich, ale aj existujúcich a interných klientov bolo vybudovanie unifikovanej celoslovenskej core siete, s nosnou technológiou MPLS, s jednotnou koncepciou a centrálnou správou. Takáto sieť umožní rýchlu realizáciu nových a jednoduchšiu údržbu existujúcich spojov a poskytne všetkým pripojeným sieťam výhodu rovnako vysokej úrovne kvality spojenia. Toto riešenie eliminovalo nestabilnú a nespoľahlivu sieť i dlhý čas konvergencie, čo su hlavné veľké riziká pri prenose multicastových streamov pre vysielanie. Towercom tak dosiahol vyrazné zvýšenie spoľahlivosti a kontroly nad dodávanymi streamami do vysielania a možnosť poskytovať dátove služby na vyššej úrovni.\r\n\r\nRiešenie od spoločnosti Digmia:\r\n\r\nV Core sieti sme navrhli a implementovali Cisco ASR “ASR9010” a ASR “ASR9006” a v Edge sieti sa použili ME3600 routre. Pri návrhu sme na základe potrieb a predstáv zákaznika zvolili najvhodnejšiu topológiu novej siete a zúžili výber možných platforiem, ktoré spĺňali všetky technologické požiadavky. Následne nad užším výberom prebehlo výberové konanie. Pri implementacii sme mali možnosť mať dve paralelné infraštruktúry na dôkladné otestovanie celej funkcionality. Výzvou bolo zjednotiť rôzne spôsoby dodávky streamov na prepojoch od partnerov a zakazníkov počas jedného servisného okna (3h). Po nasadení riešenia spravujeme a monitorujeme zakazníkovi celú Core aj Edge sieť (a taktiež iné technicky náročné časti ich siete).\r\n\r\nPrínos riešenia pre klienta:\r\n\r\nHlavným benefitom pre Towercom bolo zefektívnenie a skvalitnenie dopravy streamov od zákaznikov po vysielací headend, výrazné zvýšenie kontroly a možností riešenia prípadných problémov s nimi. Vlastné verejné BGP AS number + IP rozsahy a “full” BGP routing smerom na dvoch nezávislých upstream ISP providerov. Možnosť širšej a flexibilnejšej ponuky dátových služieb (rôzne druhy okruhov, pripojení). Klient ma väčšiu možnosť škálovateľnosti. Oveľa výkonejšia core sieť priniesla “neobmedzené” možnosti pripájania a poskytovania služieb externým zákaznikom. Stabilita streamovania streamov (zo štúdií až po satelitný uplink/terestrálny uplink/radio broadcasting uplink). Towercom sa stal ISP.', 'https://www.digmia.com/images/towercom-casestudy.png'),
(6, 'CTAP - Cyber Threat Assessment Program', 'Program Hodnotenia Kybernetických Hrozieb\r\n\r\nObávate sa, že vaša súčasná infraštruktúra nie je dostatočné zabezpečená proti najnovším sofistikovaným útokom? Máte prehlaď nakoľko aplikácie vyťažujú Vašu sieť? Je Vaše súčasné bezpečnostné riešenie schopné držať krok pri zvýšených nárokoch na priepustnosť dát?\r\n\r\nCTAP predstavuje jedinečnú príležitosť, ako overiť bezpečnosť, vyťaženosť, produktivitu používateľov Vašej siete, a to za pomoci reportu, ktorý obsahuje objektívne zhodnotenia stavu siete. Tento report je zdarma, potrebujete len DEMO zariadenie FortiGate.\r\n\r\nAko program funguje?\r\nZariadenie FortiGate (bez narušenia vašej infraštruktúry – L2 mirroring) počas niekoľkých dní monitoruje prevádzku v sieti zákazníka a následne sa vytvorí detailný report s podrobnými informáciami o všetkých hrozbách (Cyber Threat Assessment Report), ktoré obchádzajú vaše existujúce bezpečnostné kontroly. FortiGate zariadenie nasadzujete ako pasívny prvok do siete, nič neinštalujete. Stačí len stiahnuť vygenerovaný súbor s konfiguráciou, ktorá sa nahrá na Demo box.\r\n\r\nReport je rozdelený do troch kategórií:\r\n\r\nZabezpečenie – Získajte viac informácií o zraniteľnostiach aplikácií ktoré používate vo Vašej infraštruktúre, o tom, ktorý malware alebo botnety boli zistené vo vašej infraštruktúre, a tiež o rizikových zariadeniach.\r\n\r\nProduktivita – Zistite, ako sa vo vašej sieti využívajú rôzne typy aplikácií peer-to-peer, hry, multimédiá, rôzne úložiská a ďalšie podkategórie aplikácií. Presvedčte sa, že používanie webových a tradičných client-server aplikácií je v súlade s Vašou firemnou politikou.\r\n\r\nVyužitie siete – Zistite viac o vašej priepustnosti a požiadavkách na šírku pásma počas špičiek. Uistite sa, že Vaše bezpečnostné riešenie je správne dimenzované a optimalizované na základe skutočného využitia.', 'https://www.digmia.com/images/blogy/fortinet_ctap.jpg');

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `employees`
--

CREATE TABLE `employees` (
  `id` int(11) NOT NULL,
  `name` varchar(40) COLLATE utf8mb4_slovak_ci NOT NULL,
  `position_id` int(11) NOT NULL,
  `about` text COLLATE utf8mb4_slovak_ci NOT NULL,
  `fotka` text COLLATE utf8mb4_slovak_ci NOT NULL,
  `youtube` varchar(100) COLLATE utf8mb4_slovak_ci NOT NULL,
  `linkedin` varchar(100) COLLATE utf8mb4_slovak_ci NOT NULL,
  `twitter` varchar(100) COLLATE utf8mb4_slovak_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_slovak_ci;

--
-- Sťahujem dáta pre tabuľku `employees`
--

INSERT INTO `employees` (`id`, `name`, `position_id`, `about`, `fotka`, `youtube`, `linkedin`, `twitter`) VALUES
(1, 'John Bryans', 4, 'My name is John and I am a founder of mITness.', 'https://images.pexels.com/photos/35065/homeless-man-color-poverty.jpg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2', 'https://www.youtube.com', 'https://www.linkedin.com', 'https://www.twitter.com'),
(2, 'Marek Novák', 2, 'Volám sa Marek a v mITness pracujem už 3 roky.', 'https://images.pexels.com/photos/2379004/pexels-photo-2379004.jpeg', 'https://www.youtube.com', 'https://www.linkedin.com', 'https://www.twitter.com'),
(4, 'John Mayers', 2, 'Som rapper.', 'https://images.pexels.com/photos/1933873/pexels-photo-1933873.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2', 'www.youtube.com', 'www.youtube.com', 'www.youtube.com'),
(5, 'Michael Schumacher', 2, 'F1 driver', 'https://images.pexels.com/photos/1139743/pexels-photo-1139743.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2', 'www.youtube.com', 'www.youtube.com', 'www.youtube.com'),
(7, 'Vladimír Lubek', 1, 'Volám sa Vladimír Lubke', 'https://images.pexels.com/photos/4394807/pexels-photo-4394807.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2', '', '', ''),
(8, 'Amalia Saho', 5, 'Som Student developer.', 'https://images.pexels.com/photos/4156467/pexels-photo-4156467.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2', 'https://www.youtube.com', 'https://www.youtube.com', 'https://www.youtube.com');

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `employee_position`
--

CREATE TABLE `employee_position` (
  `id` int(11) NOT NULL,
  `position` varchar(50) COLLATE utf8mb4_slovak_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_slovak_ci;

--
-- Sťahujem dáta pre tabuľku `employee_position`
--

INSERT INTO `employee_position` (`id`, `position`) VALUES
(1, 'CEO'),
(2, 'Front-end developer'),
(3, 'Back-end developer'),
(4, 'Scrum master'),
(5, 'Student developer');

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `info`
--

CREATE TABLE `info` (
  `id` int(11) NOT NULL,
  `nadpis` varchar(30) COLLATE utf8mb4_slovak_ci NOT NULL,
  `text` varchar(1024) COLLATE utf8mb4_slovak_ci NOT NULL,
  `fotka` varchar(1024) COLLATE utf8mb4_slovak_ci NOT NULL,
  `placement` varchar(30) COLLATE utf8mb4_slovak_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_slovak_ci;

--
-- Sťahujem dáta pre tabuľku `info`
--

INSERT INTO `info` (`id`, `nadpis`, `text`, `fotka`, `placement`) VALUES
(1, 'Naše začiatky', 'Náš príbeh začal v roku 2006, kedy sa v správnom čase a na správnom mieste stretli dvaja zakladatelia Vlado a Juraj – IT nadšenci. Vytvorili unikátne pracovné prostredie plné slobody a osobnej zodpovednosti.\r\n', 'https://images.pexels.com/photos/12179283/pexels-photo-12179283.jpeg', 'intro'),
(3, 'Riešenie na mieru', 'Každú zakázku riešime individuálne a podľa predstáv zákaznika. Výsledok našej práce je jedinečný.', 'https://images.pexels.com/photos/210881/pexels-photo-210881.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2', 'info'),
(4, 'Vysoká bezpečnosť', 'Dbáme na bezpečnosť v aplikáciach a riešeniach.', 'https://images.pexels.com/photos/4291/door-green-closed-lock.jpg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2', 'info'),
(5, 'Dostupnosť', 'Myslíme aj na to, aby váš web bol dostupný pre zákaznikova ľahko sa dostali k vašim produktom.', 'https://images.pexels.com/photos/247781/pexels-photo-247781.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2', 'info'),
(6, 'Kontaktujte nás', 'Ak sa vám páči naša práca, neváhajte nás kontaktovať', '#', 'outro');

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `nazov` varchar(128) COLLATE utf8mb4_slovak_ci NOT NULL,
  `href` varchar(128) COLLATE utf8mb4_slovak_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_slovak_ci;

--
-- Sťahujem dáta pre tabuľku `menu`
--

INSERT INTO `menu` (`id`, `nazov`, `href`) VALUES
(1, 'Domov', 'index.php'),
(2, 'Články', 'articles.php'),
(3, 'O nás', 'about.php'),
(4, 'Kontakt', 'contact.php');

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_slovak_ci NOT NULL,
  `email` varchar(30) COLLATE utf8mb4_slovak_ci NOT NULL,
  `subject` varchar(30) COLLATE utf8mb4_slovak_ci NOT NULL,
  `message` text COLLATE utf8mb4_slovak_ci NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_slovak_ci;

--
-- Sťahujem dáta pre tabuľku `messages`
--

INSERT INTO `messages` (`id`, `name`, `email`, `subject`, `message`, `created_at`) VALUES
(1, 'la', 'lsol@ma.com', '', 'sdsd', '2022-11-28');

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(30) COLLATE utf8mb4_slovak_ci NOT NULL,
  `password` varchar(20) COLLATE utf8mb4_slovak_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_slovak_ci;

--
-- Sťahujem dáta pre tabuľku `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'lsolecky@gmail.com', '123');

--
-- Kľúče pre exportované tabuľky
--

--
-- Indexy pre tabuľku `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pre tabuľku `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pre tabuľku `employee_position`
--
ALTER TABLE `employee_position`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pre tabuľku `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pre tabuľku `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pre tabuľku `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pre tabuľku `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pre exportované tabuľky
--

--
-- AUTO_INCREMENT pre tabuľku `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pre tabuľku `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pre tabuľku `employee_position`
--
ALTER TABLE `employee_position`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pre tabuľku `info`
--
ALTER TABLE `info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pre tabuľku `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pre tabuľku `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pre tabuľku `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
