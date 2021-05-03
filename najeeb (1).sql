-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2021 at 01:55 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `najeeb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` longtext COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.png',
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `image`, `password`, `created_at`, `updated_at`) VALUES
(2, 'razan', 'zuaiter.razan@gmail.com', '1619815616.jfif', '$2y$10$K28JEspoOkH8fWFAKY6AMe.DXDgZIsDFEoCHrl.JqtWSRL1kT.4cm', '2021-04-30 17:44:08', '2021-04-30 17:46:56'),
(3, 'Razan', 'fffss@eee.com', '1619819193.jfif', '$2y$10$7i9cnlh78AhTodUOfVCXn.ITsvIngsNpVu0q40WuFRhudXTyZQDNq', '2021-04-30 18:45:20', '2021-04-30 18:46:33');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `book_id` bigint(20) UNSIGNED NOT NULL,
  `book_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `book_author` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `book_description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `book_pagesNumber` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `book_language` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `book_age` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `book_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `book_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `upload_file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`book_id`, `book_name`, `book_author`, `book_description`, `book_pagesNumber`, `book_language`, `book_age`, `book_price`, `book_image`, `upload_file`, `category_id`, `created_at`, `updated_at`) VALUES
(2, 'الأمير الصغير', 'أنطوان دو سانت إكزوبيري', '<p>لأن الكبار لا يفهمون أفكار ، وأحلام ، ولغة الصغار . ويفسرون علاقتهم بالأشياء، بمنطق مختلف ، يصدم عوالم الطفولة وسحر أسرارها . فإن لهؤلاء الصغار ردود أفعالهم , التي تتأصل في تكوينهم اللاحق ، وتغذّي مخيّلتهم بصور مغايرة، وساخرة من الذين يحاولون تعطيل لغتهم ، وقدرتهم على التحليق . <br />\r\nوهذا ما حدث مع طفل اكسوبري ، ابن السادسة ، الذي رسم صورة لحيّة بوا تبتلع فيلا ، استوحاها من قراءاته لكتاب عن الغابة البدائية . حيث لم ير من كان حوله من الكبار ، في تلك الصورة ، إلا شكل قبعة . وقد أثاروا بفهمهم هذا خيبة أمله ، مما اضطره لترك الرسم .<br />\r\nإن قرار الطفل المحبط ، فيما بعد ، باختيار مهنة قيادة الطائرات ، هو واحد من ردود الأفعال المتحديّة لعالم يُحسن فيه الكبار لعبة ورق البريدج ، والغولف ، والسياسة ، وربطات العنق . ولكن لا يفهمون ما يرسمه طفل صغير . هو قرار الطيران بعيدا عن سوء الفهم .<br />\r\nوبخيال ذلك الطفل ، الذي يسكن في داخله ، يرسم اكسوبري عوالم روايته ، أو حكايته ، التي تشبه رسوم الصغار ، وهي تنتهك بألوانها المتداخلة ، وخطوطها المتنافرة باتجاهات لا تمسكها بؤرة واحدة ، أو إطار يشكلها على وفق حدوده الثابتة والمقيّدة لانتشار الفكرة . وتتهكم على منطق لا يرى بأكثر من زاوية نظره الضيقة . وقد قصد اكسوبري أن تكون الفاصلة حادة بين حياة الطفل وعالم الكبار . حيث لم ترد أيّ إشارة لمرحلة ما بعد طفولته ، ولحين أصبح طيّارا . كأنما أراد بذلك ، أن يمنح أجواء حكايته نقاء خالصا .. يظل فيها بطله طفل الصورة الحالم ، والطائرة مجرّد وسيلة لوجوده في مكان يحقق له حرية الحلم ، والطيران بعيدا عن تدخلات الكبار المفسدة لكل مخيّلة حرّة . مكان تأخذ فيه دعابة الصغار، وأفكارهم التهكميّة مداها الأوسع والمؤثر</p>', '51', 'العربية', '10', '6', '1619633437.png', '1619817983.pdf', 2, '2021-04-28 15:10:37', '2021-04-30 18:26:23'),
(3, 'أبو صير وأبو قير', 'كامل الكيلاني', '<p>تحميل كتاب أبي صير وأبي قير pdf الكاتب كامل الكيلاني</p>\r\n\r\n<p>قصة أبي صير وأبي قير: كان أحدهما حلاقًا والآخر صباغًا وقد تعاهدا على الوفاء، فخان أبو صير صديقه ولكن أخلاق أبي قير أنجته من الخيانة.</p>\r\n\r\n<p> </p>', '13', 'العربية', '6', '1', '1619633851.jpg', '1619817700.pdf', 2, '2021-04-28 15:17:31', '2021-04-30 18:21:40'),
(4, 'أحلام بسبسة', 'كامل الكيلاني', '<p>تحميل كتاب أحلام بسبسة pdf الكاتب كامل الكيلاني</p>\r\n\r\n<p>تحكي هذه القصة عن القطة «بسبسة» ومغامراتها في صيد فرائسها.</p>\r\n\r\n<p> </p>', '16', 'العربية', '5', '3', '1619633951.jpg', '1619817970.pdf', 2, '2021-04-28 15:19:11', '2021-04-30 18:26:10'),
(5, 'عساكر قوس قزح', 'أندريا هيراتا', '<p>حدثنا إكال؛ راوي القصة وأحد أبطالها، عن نفسه وعن رفاقه العشرة بأسلوب يأسر القلوب. فإذا بنا ونحن نتابع سيرته بشغف، نضحك تارة ونبكي تارة وتعترينا الدهشة تارات. لكل واحد من أعضاء قوس قزح حكايته، ولكل واحد منهم إنجازاته وانتصاراته وهزائمه وأحزانه ومسراته،</p>', '278', 'العربية', '12', '7', '1619635037.jpg', '1619635037.pdf', 4, '2021-04-28 15:37:17', '2021-04-28 15:37:17'),
(6, 'البؤساء-الجزء الأول', 'فكتور هيجو', '<p>تحميل كتاب البؤساء الجزء الأول pdf الكاتب فيكتور هوجو</p>\r\n\r\n<p>البؤساء أو البائسون (بالفرنسية: Les Mis&eacute;rables) رواية للكاتب فكتور هوجو نشرت سنة 1862، وتعد من أشهر روايات القرن التاسع عشر، إنه يصف وينتقد في هذا الكتاب الظلم الاجتماعي في فرنسا بين سقوط نابليون في 1815 والثورة الفاشلة ضد الملك لويس فيليب في 1832. إنه يكتب في مقدمته للكتاب: &quot;تخلق العادات والقوانين في فرنسا ظرفا اجتماعيا هو نوع من جحيم بشري. فطالما توجد لامبالاة وفقر على الأرض، كتب كهذا الكتاب ستكون ضرورية دائما&quot;.<br />\r\nتصف البؤساء حياة عدد من الشخصيات الفرنسية على طول القرن التاسع عشر الذي يتضمن حروب نابليون، مركزةً على شخصية السجين السابق جان فالجان ومعاناته بعد خروجه من السجن.<br />\r\nتعرض الرواية طبيعة الخير والشر والقانون في قصة أخاذة تظهر فيها معالم باريس، الأخلاق، الفلسفة، القانون، العدالة، الدين وطبيعة الرومانسية والحب العائلي. لقد ألهم فيكتور هوجو من شخصية المجرم/الشرطي فرانسوا فيدوك ولكنه قسم تلك الشخصية إلى شخصيتين في قصته.<br />\r\nرواية البؤساء ظهرت على المسرح والشاشة عبر المسرحية التي تحمل نفس الاسم وايضًا تم انشاء فيلم لرواية نفسها بأسم البؤساء (فيلم 2012) و قد حقق مبيعات ضخمه حتى ان تقيمة قد وصل إلى 7.6/10 و قد حصل على عدة جوائز.</p>\r\n\r\n<p>هي مشهورة ولكن قد لا يعلم البعض كم هي قصة مؤثرة ذات معاني إنسانية عميقة&hellip;&hellip;يواجه أبطالها مواقف صعبة كثيرة في الحياة ويتصرفون فيها تبعا لشخصياتهم وإنسانيتهم</p>', '496', 'العربية', '10', '9', '1619635815.png', '1619635815.pdf', 4, '2021-04-28 15:50:15', '2021-04-28 15:50:15'),
(7, 'مصيدة الوقت', 'اليك ماكنزي', '<p>.هذا الكتاب يعتمد على عشرات السنين من البحث والمقابلات مع رجال الاعمال في جميع أنحاء العالم ومنقح على نطاق واسع ليشمل الحلول القائمة على التكنولوجيا للتحديات التي نواجهها جميعا في العالم الافتراضي كما أن الكتاب مليء بالتكتيكات الذكية وأدوات ادارة الوقت التي لا تقدر بثمن دع هذا الكتاب الذي ثبتت صلاحيته يعزز انتاجيتك الشخصية ونجاحك المهني عندما لا يكون الوقت في صالحك</p>', '414', 'العربية', '13', '10', '1619636468.jpg', '1619636468.pdf', 5, '2021-04-28 16:01:08', '2021-04-28 16:01:08'),
(8, 'الثديات البحريّة', 'أحمد حماد الحسيني', '<p>كتاب مميز عن الثديات</p>', '54', 'العربية', '6', '13', '1619642628.jpg', '1619642628.pdf', 3, '2021-04-28 16:03:19', '2021-04-28 17:43:49'),
(9, 'رجال في الشمس', 'غسان كنفاني', '<p>رجال في الشمس&quot;، هي الصراخ الشرعي المفقود، إنها الصوت الفلسطيني الذي ضاع طويلاً في خيام التشرد، والذي يختنق داخل عربة يقودها خصي هزم مرة أولى وسيقود الجميع إلى الموت. وهي كرواية لا تدعي التعبير عن الواقع الفلسطيني المعاش في علاقاته المتشابكة، إنها إطار رمزي لعلاقات متعددة تتمحور حول الموت الفلسطيني، وحول ضرورة الخروج منه باتجاه اكتشاف الفعل التاريخي أو البحث عن هذا الفعل انطلاقاً من طرح السؤال البديهي: &quot;لماذا لم يدقوا جدران الخزان</p>', '112', 'العربية', '10', '3', '1619636797.jpg', '1619636797.pdf', 4, '2021-04-28 16:06:37', '2021-04-28 16:06:37'),
(10, 'DO YOU WONDER ABOUT RAIN, SNOW, SLEET AND HAIL?', 'Monkey Pen', '<p>What&rsquo;s to wonder about water?&rdquo;, you might ask. Professor Ture will tell you why. &nbsp;Filled with compelling illustrations, this free children&rsquo;s book takes a dive into a whirlpool of knowledge about the ubiquitous water that we often take for granted.</p>', '27', 'English', '5', '3', '1619637217.jpg', '1619637217.pdf', 2, '2021-04-28 16:13:37', '2021-04-28 16:13:37'),
(11, 'THE HIKE', 'Monkey Pen', '<p>Mandy and grandpa went on a hike . But it was more than that. Together they explored the woods, learnt to be at peace with nature and talked their hearts out about things that mattered. It was a special bond between them and you&rsquo;ve got to read this great free illustrated children&rsquo;s book to experience it. Happy Exploring!!</p>', '21', 'English', '5', '3', '1619637320.jpg', '1619637320.pdf', 2, '2021-04-28 16:15:20', '2021-04-28 16:15:20'),
(12, 'Lost in the Internet', 'Siddharth Mehta', '<p>Kunal&rsquo;s Mum warned him against watching too much on the internet lest he gets sucked in, but he doesn&rsquo;t listen. Kunal gets suddenly sucked into the internet and goes on a journey of discovery.</p>\r\n\r\n<p>Sample Text From Lost in the Internet</p>\r\n\r\n<p>Kunal loved the Internet. He was always asking Mummy for her phone so he could watch videos. &ldquo;Don&rsquo;t watch for too long or you&rsquo;ll get pulled in!&rdquo; Mummy warned him.</p>\r\n\r\n<p>First, Kunal watched a video of cartoon ninjas. Next, he watched one of a volcano spewing lava. Then, he watched one of a baby playing with a dog. With each video, Kunal&rsquo;s face came closer and closer to the screen.</p>', '20', 'English', '6', '2', '1619637960.jpg', '1619637960.pdf', 3, '2021-04-28 16:26:00', '2021-04-28 16:26:00'),
(13, 'Sid the Science Kid  A Cavity Is a Hole in Your Tooth', 'Jodi Huelin', '<p>Let&#39;s-Read-and-Find-Out About Teeth</p>\r\n\r\n<p>Have you ever wondered what would happen if you never brushed your teeth? Why do you need your teeth to be strong and hard? Read and find out all about teeth with Sid the Science Kid!</p>', '15', 'English', '5', '15', '1619638108.jpg', '1619638108.pdf', 3, '2021-04-28 16:28:28', '2021-04-28 16:28:28'),
(14, 'Les meilleurs amis de monde.pdf', 'هانس وليام', '<p>Les meilleurs amis de monde.pdf</p>', '18', 'French', '5', '3', '1619638520.jpg', '1619638520.pdf', 2, '2021-04-28 16:35:20', '2021-04-28 16:35:20'),
(15, 'Sale Menteur', 'هانس وليام', '<p>Sale Menteur</p>', '18', 'French', '5', '2', '1619638564.jfif', '1619638564.pdf', 2, '2021-04-28 16:36:04', '2021-04-28 16:36:04'),
(16, 'عنيدات', 'ريتشل سوابي', '<p>كتاب عنيدات 52 امرأة غيّرت وجه التاريخ و العلم PDF تأليف&nbsp;ريتشل سوابي ..&nbsp;&quot;امرأة أحدثت ثورة في جراحة القلب. امرأة وضعت المعايير لفحص جميع الأطفال حديثي الولادة للتأكد من صحتهم. امرأة كانت المسؤولة عن بعض العلاجات المبكرة لأمراض السرطان المزمنة. من المفترض أننا لا نحتاج لأن يتم تذكيرنا بأسمائهم ، و لكننا نحتاج لذلك بالفعل. قامت ريتشل سوابي و بلمسة بارعة منها</p>\r\n\r\n<p><strong>، بجمع مجموعة ملهمة من الشخصيات التي تُتبر رمزًا أساسيًا للعلوم في القرن العشرين. &quot;عنيدات&quot; هو بمثابة استكشاف ضروري لتلك الأسماء التاريخية التي يجب أن يتم تذكرها ، وضعت سوابي دليلًا رائعًا لذلك من خلال قصصهم.&quot;</strong></p>', '340', 'العربية', '12', '6', '1619638867.jfif', '1619638867.pdf', 5, '2021-04-28 16:41:07', '2021-04-28 16:41:07'),
(17, 'رحلة للبنات فقط', 'أميرة جادالله', '<p>تطلعنا نور اليقين على صفحات من رحلتها التي دونتها على دفتر مذكراتها .. رحلتها التي بدأت بحبةٍ أزعجتها حين ظهرت على أنفها ذات صباح، ثم توالت المحطات في تلك الرحلة المثيرة.. ترى هل هي رحلة خاصة بنور وحدها؟ أم هي رحلة تمر بها كل البنات؟</p>\r\n\r\n<p>رحلة البلوغ هي رحلة هامة تحصل فيها تغييرات جسدية ونفسية كثيرة للإنسان..</p>\r\n\r\n<p>تصحبنا نوراليقين في رحلتها التي ترويها على لسانها لتجيب عن تساؤلات الفتيات المتوقعة عن البلوغ وما يصحبه من تغييرات، ولتفتح الباب لنقاش مثمر بين الأم وابنتها التي تقرأ هذا الكتاب&nbsp;</p>', '33', 'العربية', '12', '2', '1619639067.jpg', '1619639067.pdf', 2, '2021-04-28 16:44:27', '2021-04-28 16:44:27'),
(18, 'ادرس بذكاء وليس بجهد', 'كيفن بول', '<p>يوجد طلاب اليوم في المدارس الثانوية والكليات والمكاتب ومراكز تعليم الكبار والجامعات والمدارس التجارية وندوات نهاية الأسبوع. مع حدود زمنية ومنافسة شرسة ، يحتاج الطلاب إلى الاستفادة من إمكاناتهم الخفية وتحقيق أقصى قدر من الأداء. دراسة أكثر ذكاء ، وليس أصعبيزود القراء بالمعلومات الأساسية التي يحتاجونها للدراسة بنجاح في أي موقف. تتضمن هذه الطبعة الجديدة ، التي تم إصدارها بعد عشر سنوات من نشر الطبعة الأولى ، ما يلي: - استراتيجيات جديدة لإدارة الوقت - أدوات جديدة لتحديد الأهداف - مناقشة الأساطير الشائعة مثل القراءة السريعة - مهارة الدراسة رقم 1 ضرورية للصفوف العليا في أي دورة تدريبية - الموارد والدعم عبر الإنترنت - بالإضافة إلى أنه يشمل جميع النصوص الأصلية التي جعلت هذا الكتاب من أكثر الكتب مبيعًا: - ما مدى أهمية الإعداد في الدراسة؟ - كيف أحسّن ذاكرتي وتركيزي؟ - كيف يجب أن أدرس للامتحانات؟ تم كتابة هذا الكتاب للطلاب من جميع الأعمار ، وخاصة لطلاب المدارس الثانوية والكليات والجامعات. ولكن هناك أيضًا الآلاف من البالغين العائدين إلى المدرسة أو يتلقون دروسًا مسائية في في جميع أنحاء البلاد.</p>', '231', 'العربية', '11', '5', '1619639392.jfif', '1619639392.pdf', 5, '2021-04-28 16:49:52', '2021-04-28 16:49:52'),
(19, 'كتاب من الذي حرك قطعة الجبنة الخاصة بي', 'سبنسر جونسون', '<p><strong>كتاب من الذي حرك قطعة الجبنة الخاصة بي</strong>&nbsp;للمؤلف العالمي &quot;&nbsp;<strong>سبنسر جونسون</strong>&quot;، يعد هذا العمل العظيم الذي لاقى رواجا كبيرا بين طبقات الشعوب بمثابة دليل إرشادي يوجه الأشخاص إلى كيفية التعامل مع التغيرات الطارئة التي تحدث على حياة الإنسان الشخصية، والحياة العملية، حيث وصف الكاتب بأن الحياة ليست خط مستقيم بدون ثنايا أو منحيات، فهي في الأصل عبارة عن متاهات كل منها لها خباياها الخاصة بها، وتوجب علينا البحث عن طريقنا الصحيح، فقد نتعرض إلى عثرات، وتخبطات في الطريق، والالتقاء بممرات سوداء، قد تزرع في أنفسنا الفشل والإحباط، ولكن هنا التمسك بالإيمان والثقة بالله تعالى في تخطي كافة العثرات التي تواجهنا، فسوف يفتح الله لنا أبواب جمة للخير، لا ندركها ولا نطلبها.</p>', '60', 'العربية', '8', '5', '1619639542.jpg', '1619639542.pdf', 5, '2021-04-28 16:52:22', '2021-04-28 16:52:22'),
(20, 'اكتشاف الذات', 'عبد الكريم بكار', '<p>إن أمة الإسلام لا تملك كثيراً من الإمكانات المادية والثروات، ولا الكثير من التقدم التقني، لكنها تملك شيئين مهمين: المنهج الرباني الأقوم، ثم الثروة البشرية المتزايدة بقوة. إذا استطعنا أن نشيع في الأمة الإسلامية ثقافة تنمية الذات، وشحذ الهمم، والبرمجة الشخصية، فإننا نكون قد أوجدنا الأساس الضروري لتفعيل الطاقات الإسلامية الهائلة والهاجعة في الوقت ذاته، ولا بد من التذكير هنا بأن النمو المادي على المستوى الجسمي، وعلى مستوى الثروات المادية يظل محدوداً، أما النمو العقلي والروحي فإنه ليس محدداً بأسوار تحول دون مضيه نحو آفاق رحبة ممتدة، فالناس مهما بلغوا من الكمال يظلون ناقصين، مما يعني أن تنمية الشخصية يمكن أن تستمر في الوقت الذي يتأزم فيه كثير من النشاطات الصناعية والمادية. ويتضمن هذا الكتاب مداخل وإضاءات لقضايا عديدة تتصل بتكوين الذات واكتشافها. ومرشدات ومؤشرات في صورة تقريرات مباشرة وغير مباشرة، توقظ وعي المسلم نحو الافاق الممتدة والمتعددة لتنمية الشخصية والنهوض بها. من تلك المرشدات والمؤشرات ما يتصل بالجانب المعرفي النظري، ومنها ما يتصل بالجانب السلوكي. وسوف يستطيع القارئ أن يقيم نفسه من خلال درجات يضعها لنفسه تجاه كل سؤال في المسار الذي يعتقد أنه ملائم لرؤيته ووضعيته. يكتشف القارئ من خلال هذا الكتاب التكوين العام للذات الإنسانية، إضافة إلى موقعه الحالي من سلم النمو؛ مما يعينه على تلمس الجوانب التي تحتاج إلى تنمية في ذاته.. ويصبح دليلاً له في طريقه الطويل إلى تنمية ذاته</p>', '192', 'العربية', '13', '6', '1619639680.jpg', '1619639680.pdf', 5, '2021-04-28 16:54:40', '2021-04-28 16:54:40'),
(21, 'كوكب الأرض', 'سون هان كيم', '<p>كتاب شيّق عن الفضاء</p>', '19', 'العربية', '5', '5', '1619640795.jfif', '1619640795.pdf', 3, '2021-04-28 17:13:15', '2021-04-28 17:13:15'),
(22, 'Science for kids', 'وليام', '<p>Energy and Fusion&nbsp;&nbsp;Science book for kids</p>', '20', 'English', '13', '8', '1619641119.jpg', '1619641119.pdf', 3, '2021-04-28 17:18:39', '2021-04-28 17:18:39'),
(23, 'Space Puzzles Book 1 – fun activities for kids from NASA', 'Nasa', '<p>A space puzzles book for children interested in space. This activity book contains interesting facts about space flight along with activities to match. The book includes a maths puzzle, unscramble national parks, find words, match parts of the space station, and spot the difference. The National Aeronautics and Space Administration, or NASA, and the National</p>', '13', 'English', '6', '15', '1619641484.jfif', '1619641484.pdf', 3, '2021-04-28 17:24:44', '2021-04-28 17:24:44'),
(24, 'جسم الانسان للأطفال', 'ان وليام', '<p>كتاب ممتع عن كل تفاصيل جسم الانسان&nbsp;</p>', '400', 'العربية', '9', '15', '1619642029.jpg', '1619642029.pdf', 3, '2021-04-28 17:33:49', '2021-04-28 17:33:49'),
(25, 'Human Body', 'ان وليام', '<p>Interesting book about human body</p>', '86', 'English', '8', '10', '1619642235.png', '1619642235.pdf', 3, '2021-04-28 17:37:15', '2021-04-28 17:37:15');

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `cart_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `book_id` bigint(20) UNSIGNED NOT NULL,
  `total` bigint(20) NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ship_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_name`, `category_description`, `category_image`, `created_at`, `updated_at`) VALUES
(2, 'قصص مصورة', '<p><strong>قصص مصورة جميلة و هادفة مع رسومات جاذبة للأطفال</strong></p>', '1619563623.jpg', '2021-04-27 19:47:03', '2021-04-27 19:47:03'),
(3, 'كتب علمية', '<p>كتب علميّة جول الفضاء و الاختراعات و غيرها الكثير</p>', '1619563670.jpg', '2021-04-27 19:47:50', '2021-04-27 19:47:50'),
(4, 'روايات', '<p>روايات هادفة تأخذك إلى عالمٍ مليءٍ بالسحر و الخيال</p>', '1619563739.jpg', '2021-04-27 19:48:59', '2021-04-27 19:48:59'),
(5, 'كتب متنوعة', '<p>اكتشف عوالم جديدة بنفسك</p>', '1619563858.jpg', '2021-04-27 19:50:58', '2021-04-27 19:50:58');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2020_07_28_162245_create_wishlist_table', 1),
(4, '2021_04_12_141331_create_books_table', 1),
(5, '2021_04_12_183259_create_categories_table', 1),
(6, '2021_04_14_191126_create_admins_table', 1),
(7, '2021_04_19_154649_create_carts_table', 1),
(8, '2021_04_19_155059_create_shelves_table', 1),
(9, '2021_04_23_004839_create_orders_table', 1),
(10, '2021_04_23_005017_create_orders_books_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `book_id` bigint(20) UNSIGNED NOT NULL,
  `total` bigint(20) NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ship_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `user_id`, `book_id`, `total`, `location`, `phone`, `ship_date`, `created_at`, `updated_at`) VALUES
(1, 1, 24, 60, 'ثثثث', NULL, '2021-05-29', '2021-04-30 09:39:54', '2021-04-30 09:39:54'),
(10, 3, 5, 28, 'اربد', NULL, '2021-05-30', '2021-05-01 16:05:59', '2021-05-01 16:05:59'),
(11, 3, 14, 12, 'اربد', NULL, '2021-05-30', '2021-05-03 14:09:22', '2021-05-03 14:09:22');

-- --------------------------------------------------------

--
-- Table structure for table `orders_books`
--

CREATE TABLE `orders_books` (
  `orders_books_id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `book_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `shelves`
--

CREATE TABLE `shelves` (
  `shelf_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `book_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shelves`
--

INSERT INTO `shelves` (`shelf_id`, `user_id`, `book_id`, `created_at`, `updated_at`) VALUES
(1, 1, 9, '2021-04-28 17:39:03', '2021-04-28 17:39:03'),
(2, 1, 2, '2021-04-28 17:39:49', '2021-04-28 17:39:49'),
(3, 1, 10, '2021-04-28 17:40:45', '2021-04-28 17:40:45'),
(4, 1, 11, '2021-04-28 17:40:53', '2021-04-28 17:40:53'),
(5, 1, 14, '2021-04-28 17:41:09', '2021-04-28 17:41:09'),
(6, 1, 16, '2021-04-28 17:41:20', '2021-04-28 17:41:20'),
(7, 1, 17, '2021-04-28 17:41:34', '2021-04-28 17:41:34'),
(20, 3, 5, '2021-05-01 16:05:29', '2021-05-01 16:05:29');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` enum('user','admin') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '/images/default.png',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `email`, `email_verified_at`, `password`, `role`, `image`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'رزان', 'razan818@gmail.com', NULL, '$2y$10$g.5OVkG14LudBHCvrKNdxuhgjjPJNooZkVwLA0U4kpqvllUOyw.xu', 'user', '/images/1619820259.jfif', NULL, '2021-04-30 19:04:19', '2021-04-30 19:04:19'),
(4, 'دانه', 'test@mail.com', NULL, '$2y$10$.sj.8nIgaft351OXNrMtVeQr0CR0azGT0X5afCmB/j8UFzXbASCN2', 'user', '/images/1619893461.jpg', NULL, '2021-05-01 15:24:21', '2021-05-01 15:24:21');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `session_id` char(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `item_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `orders_books`
--
ALTER TABLE `orders_books`
  ADD PRIMARY KEY (`orders_books_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `shelves`
--
ALTER TABLE `shelves`
  ADD PRIMARY KEY (`shelf_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`id`),
  ADD KEY `wishlist_user_id_index` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `book_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `cart_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `orders_books`
--
ALTER TABLE `orders_books`
  MODIFY `orders_books_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `shelves`
--
ALTER TABLE `shelves`
  MODIFY `shelf_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
