-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Feb 08, 2023 at 08:48 AM
-- Server version: 5.7.39
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alejandria`
--

-- --------------------------------------------------------

--
-- Table structure for table `alejandria`
--

CREATE TABLE `alejandria` (
  `isbn` varchar(25) NOT NULL,
  `editorial` text NOT NULL,
  `titulo` text NOT NULL,
  `autor` text NOT NULL,
  `descripcion` text NOT NULL,
  `img` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `alejandria`
--

INSERT INTO `alejandria` (`isbn`, `editorial`, `titulo`, `autor`, `descripcion`, `img`) VALUES
('', 'Random House', 'El Secreto', 'Rhonda Byrne', '\"El Gran Secreto siempre ha estado presente de forma fragmentada en las tradiciones orales, en la literatura, en las religiones y en las distintas filosofías de todos los tiempos. Por primera vez, todos esos componentes se ha reunido en una increíble revelación que transformará la vida de todo aquel que la experimente.\r\n\r\nEn este libro aprenderás a utilizar El Secreto en todos los aspectos de tu vida: dinero, salud, relaciones, felicidad y en todas tus interacciones con el mundo. Empezarás a entender el poder oculto y sin explotar que hay en tu interior. Esta revelación te aportará felicidad en todas las áreas de tu vida.\"', '.jpg'),
('978-1250095082', 'Planeta', 'El resplandor', 'Stephen King', '\"REDRUM - Esa es la palabra que Danny había visto en el espejo. Y, aunque no sabía leer, entendió que era un mensaje de horror.\r\n\r\nDanny tenía cinco años, y a esa edad poco niños saben que los espejos invierten las imágenes y menos aún saben diferenciar entre realidad y fantasía. Pero Danny tenía pruebas de que sus fantasías relacionadas con el resplandor del espejo acabarían cumpliéndose: REDRUM... MURDER, asesinato.\"', '978-1250095082.png'),
('978-1250095084', 'Random House', 'Sad Animal Facts', 'Brook Barker', 'A delightful and quirky compendium of the Animal Kingdom’s more unfortunate truths, with over 150 hand-drawn illustrations. This melancholy menagerie pairs the more unsavory facts of animal life with their hilarious thoughts and reactions. Sneakily informative, and wildly witty, SAD ANIMAL FACTS will have you crying with laughter.', '978-1250095084.jpg'),
('978-8378885111', 'Planeta', 'Alimentación y salud femenina', 'Marta Leon', '\"Recursos nutricionales y dietéticos para optimizar la salud hormonal de las mujeres en todas las etapas de su vida.\r\nConcebido como un viaje desde la primera menstruación hasta la última, este libro nos anima a profundizar en las distintasetapas hormonales de la vida de las mujeres, y a mejorar nuestra salud con una de las herramientas más poderosas que tenemos: la alimentación.\"', '978-8378885111.jpeg'),
('978-8478885110', 'Planeta', 'Tu cuerpo en llamas', 'Beatriz Larrea', '¿Sabes que tienen en común los hábitos positivos para llevar una vida sana? Que combaten directamente la inflamación, son los bomberos que van apagando el fuego de enfermedades como la tensión arterial alta, el sobrepeso, el insomnio… Muchos de los males que padecemos son inflamatorios por naturaleza y también el envejecimiento está muy marcado por este proceso.', '978-8478885110.jpeg'),
('978-8478885111', 'Planeta', 'Encuentro con el Otro', 'Ryszard  Kapuscinski ', 'El concepto de «el Otro» puede entenderse como el individuo que se contrapone a los demás individuos, pero «el Otro» también es aquel que hunde sus raíces en la diversidad de sexo, generación, nacionalidad y religión. A través del reportaje, el autor rememora a los interlocutores que ha ido encontrando por las calles del mundo. Son personas hechas de dos partes: una es el hombre con sus alegrías y sus penas, y la otra es la identidad racial, cultural y religiosa. Kapuscinski analiza este doble aspecto dejando al descubierto que la percepción cultural nunca es estática, sino móvil y sujeta a las tensiones que dependen del contexto exterior, de las expectativas del entorno y de nuestra edad y estado anímico. Así, en estas seis conferencias, el mundo es un territorio en el cual la salvaguardia de la diversidad pasa a través del conocimiento de la diversidad.', '978-8478885111.png'),
('978-8479985111', 'Random House', 'La revolución de la glucosa', 'Jessie Inchauspe', 'Mejora todos los aspectos de tu salud, desde el peso, el sueño, los antojos, el estado de ánimo, la energía, la piel… e incluso retrasa el envejecimiento con trucos fáciles de implementar y basados en la ciencia que te ayudan a controlar tus niveles de azúcar en sangre mientras sigues comiendo los alimentos que te encantan.', '978-8479985111.jpeg'),
('978-8498381498', 'Random House', 'El Principito', 'Antoine de Saint-Exupéry', 'Fábula mítica y relato filosófico que interroga acerca de la relación del ser humano con su prójimo y con el mundo, El Principito concentra, con maravillosa simplicidad, la constante reflexión de Saint-Exupery sobre la amistad, el amor, la responsabilidad y el sentido de la vida.', '978-8498381498.jpg'),
('978-8499890944', 'Planeta', '1984', 'George Orwell', 'En el año 1984 Londres es una ciudad lúgubre en la que la Policía del Pensamiento controla de forma asfixiante la vida de los ciudadanos. Winston Smith es un peón de este engranaje perverso y su cometido es reescribir la historia para adaptarla a lo que el Partido considera la versión oficial de los hechos. Hasta que decide replantearse la verdad del sistema que los gobierna y somete.', '978-8499890944.jpg'),
('978-8499890966', 'Random House', 'El plan infinito', 'Isabel Allende', 'Gregory quiere llevar a la práctica el peculiar \"plan infinito\" que se trazó a sí mismo en su infancia. Sin embargo, para conseguirlo debe recorrer un duro camino lleno de obstáculos: la marginación social, el racismo, el brutal contraste entre pobreza y riqueza o la guerra de Vietnam.', '978-8499890966.png'),
('978-9500726092', 'Norma', '100 años de soledad', 'Gabriel García Márquez', 'La aventura de la familia Buendía-Iguarán, representa al mismo tiempo el mito y la historia, la tragedia y el amor del mundo entero. Muchos años después, frente al pelotón de fusilamiento, el coronel Aureliano Buendía había de recordar aquella tarde remota en que su padre lo llevó a conocer el hielo. Con estas palabras empieza una novela ya legendaria en los anales de la literatura universal, una de las aventuras literarias más fascinantes del siglo XX. Millones de ejemplares de este título leídos en todas las lenguas y el premio Nobel de literatura coronando una obra que se había abierto paso «boca a boca» -como gusta decir el escritor- son la más palpable demostración de que la aventura fabulosa de la familia Buendía-Iguarán, con sus milagros, fantasías, obsesiones, tragedias, incestos, adulterios, rebeldías, descubrimientos y condenas, representaba al mismo tiempo el mito y la historia, la tragedia y el amor del mundo entero.', '978-9500726092.png'),
('978-9500726292', 'Planeta', 'El proceso ', 'Franz Kafka ', 'Una mañana cualquiera, Josef K., joven empleado de un banco, se despierta en la pensión donde reside con la extraña visita de unos hombres que le comunican que está detenido -aunque por el momento seguirá libre-. Le informan de que se ha iniciado un proceso contra él, y le aseguran que conocerá los cargos a su debido tiempo. Así comienza una de las más memorables y enigmáticas pesadillas jamás escritas. Para el protagonista, Josef K., el proceso laberíntico en el que inesperadamente se ve inmerso supone una toma de conciencia de sí mismo, un despertar que le obliga a reflexionar sobre su propia existencia, sobre la pérdida de la inocencia y la aparición de la muerte.', '978-9500726292.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alejandria`
--
ALTER TABLE `alejandria`
  ADD PRIMARY KEY (`isbn`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
