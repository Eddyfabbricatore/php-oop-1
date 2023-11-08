<?php

  $collections = [
      new Movie('Ritorno al futuro', new Media('Ritorno al futuro.jpg', 'Ritorno al futuro'), 1985, '1h 56m'),
      new Movie('Two Fast Two Furious', new Media('Two Fast Two Furious.jpg', 'Two Fast Two Furious'), 2003, '1h 47m'),
      new Movie('Batman Il Cavaliere Oscuro', new Media('Batman Il Cavaliere Oscuro.jpg', 'Batman Il Cavaliere Oscuro'), 2008, '2h 32m'),
      new Movie('Oppenheimer', new Media('Oppenheimer.jpg', 'Oppenheimer.jpg'), 2023, '3h'),
      new TvSerie('Dark', new Media('Dark.jpg', 'Dark'), 2017, 2020, 26, 3),
      new TvSerie('White Collar', new Media('White Collar.jpg', 'White Collar'), 2009, 2014, 81, 6),
      new TvSerie('Peaky Blinders', new Media('Peaky Blinders.jpg', 'Peaky Blinders'), 2013, 2022, 36, 6),
      new TvSerie('Breaking Bad', new Media('Breaking Bad.jpg', 'Breaking Bad'), 2008, 2013, 62, 5)
  ];

?>