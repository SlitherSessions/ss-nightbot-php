<?php
/*
  random_snake_joke.php - This file is part of SS Nightbot PHP

  The MIT License (MIT)
  Copyright (c) 2016 Slither Sessions.  All rights reserved.

  Permission is hereby granted, free of charge, to any person obtaining a copy
  of this software and associated documentation files (the "Software"), to deal
  in the Software without restriction, including without limitation the rights to
  use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies
  of the Software, and to permit persons to whom the Software is furnished to do
  so, subject to the following conditions:

  The above copyright notice and this permission notice shall be included in all
  copies or substantial portions of the Software.

  THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
  IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
  FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
  AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
  LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
  OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
  SOFTWARE.
*/

require_once dirname(__FILE__).'/vendor/random_compat/random.php';

$jokes = array (
  array ('Q: In which river are you sure to find snakes?', 'A: The Hiss-issippi River!'),
  array ('Q: What is a snakes favorite dance?', 'A: The Mamba'),
  array ('Q: What do you call a snake who works for the government?', 'A: A civil serpent!'),
  array ('Q: What did the snake give to his wife?', 'A: A goodnight hiss!'),
  array ("Q: Why did the snake's wife file for divorce?", "A: Ereptile Disfunction."),
  array ('Q: What did the naughty little diamondback say to his big sister?', "A: Don't be such a rattle-tail!"),
  array ('Q: What does an exhibitionistic snake wear to the beach?', 'A: A pythong.'),
  array ("Q: What do you call a snake that tells jokes?", "A: Monty Python."),
  array ("Q: How do you measure a snake?", "A: In inches. They don't have any feet!"),
  array ("Q: Did you hear about the snake love letter?", "A: He sealed it with a hiss."),
  array ("Q: If you crossed a snake with a robin, what kind of bird would you get?", "A: A swallow!"),
  array ("Q: Why couldn't the female snake have any babies?", "A: Because she'd had a hiss-terectomy!"),
  array ("Q: Why did the snake laugh so hard she started to cry?", "A: She thought the joke was hisss-terical"),
  array ("Q: What do you call a reptile that plays baseball?", "A: Snake Arrieta."),
  array ("Q: What clothing might sister snakes share?", "A: Co-bras!"),
  array ("Q: How does a snake shoot something?", "A: With a boa and arrow!"),
  array ("Q: What's the wrong time to reason with a snake?", "A: When it's throwing a hissy fit."),
  array ("Q: How do you know it's time to buy a new pair of shoes?", "A: When your old ones have snake eyes."),
  array ("Q: What kind of snake keep its car the cleanest?", "A: A windshield viper!"),
  array ("Q: Did you hear about the two snakes that were in love but related?", "A: They were hissing cousins."),
  array ("Q: What snake is a member of the band?", "A: The RATTLEsnake!"),
  array ("Q: What do you get when you cross a snake and a pie?", "A: A PIE-THON!"),
  array ("Q: Why don't snakes need to weigh themselves?", "A: Because they have their own scales."),
  array ("Q: How can you revive a snake that looks dead?", "A: With mouse-to-mouth resuscitation!"),
  array ("Q: What is the most popular snake dialect?", "A: Boomslang!"),
  array ("Q: What do snakes do after they fight?", "A: Hiss and make up!"),
  array ("Q: What do snakes use to cut paper?", "A: Scissss-ors!"),
  array ("Q: What do you call taking a selfie with a rattlesnake?", "A: A missssss-take."),
  array ("Q: Did you hear about the man who crossed the snake mafia?", "A: He was given the hiss of death."),
  array ("Q: What do you call a snake that builds things?", "A: A boa constructor!"),
  array ("Q: What do you call snake without clothes?", "A: Snaked."),
  array ("Q: What is a snake's favorite subject?", "A: Hiss-tory!"),
  array ("Q: What type of snake does a baby play with?", "A: A rattlesnake!"),
  array ("Q: What's a snake's favorite school subject?", "A: Math, because it's an adder!"),
  array ("Q: Why did the snake cross the road?", "A: To get to the other s-s-s-side!"),
  array ("Q: Why was the mongoose listening to Taylor Swift?", 'A: He was trying to "Snake It Off".'),
  array ("Q: What kind of snake is completely different?", "A: A Monty Python."),
  array ("Q: Why did the cobra ask a man out on a date?", "A: Because he was a snake charmer."),
  array ("Q: Why did the Meerkat die?", "A: Because she trusted a snake in the grass."),
  array ("They found a new species of rattlesnake that can't produce venom. They say it has a reptile disfunction!", ""),
);

$index = random_int (0, count ($jokes) - 1);

header ("Content-Type: text/plain");
echo $jokes[$index][0];
if (! empty ($jokes[$index][1]))
  echo " " . $jokes[$index][1];
