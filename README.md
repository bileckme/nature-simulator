# Nature Simulator
A small program to simulate a basic relationship between the sun,
flowers and birds during the course of a day
 
- the sun rises at 06:00 and sets at 20:00
- birds instantly go to sleep one hour after the sun sets
- birds instantly wake up one hour before the sun rises
- when the sun rises each flower opens at its own random rate for that
day, from 0 to 2 hours
- when the sun sets each flower closes at its own random rate for that
day, from 0 to 2 hours
- a completely open flower can be visited by a bird
- a closing, opening or closed flower cannot be visited by a bird
- a flower can have one of three random colours: red, green or blue and
it's colour cannot be changed
- when a bird visits 2 flowers of the same colour in a row, a new flower
of that colour is created
- birds visit flowers in a random order and cannot visit the same flower
in one day
- sleeping birds cannot take any action
- output of the environment should be given on an hourly basis, in text
format
 
Run the simulation at an hourly frequency(we don't care about minutes or
seconds) for a variable number of days with a variable amount of flowers
and birds.

## Installation
To install program, run in terminal:

```
git clone https://github.com/bileckme/nature-simulator
cd nature-simulator
composer install
```

## Run program
To program run in terminal:

```
php src/Program.php
```

## Credits

Name: Biyi Akinpelu

Email: bileckme@gmail.com
