<?php

interface LevelCourse {
    public function getDuration(): int;
}

class Basic implements LevelCourse {
    public function getDuration(): int {
        return 30;
    }
}

class Intermediate implements LevelCourse {
    public function getDuration(): int {
        return 45;
    }
}

class Advanced implements LevelCourse {
    public function getDuration(): int {
        return 60;
    }
}
