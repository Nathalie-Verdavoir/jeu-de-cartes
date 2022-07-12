<?php

namespace App\Entity;

class Deck
{
    public array $colors;
    public array $values;
    public array $deck;

    public function __construct() {
        $this->colors = ['S','H','D','C'];
        $this->values = ['2','3','4','5','6','7','8','9','T','J','Q','K','A'];
        $this->initialiseCards();
    }

    public function initialiseCards()
    {
        foreach ($this->colors AS $color) {
            foreach ($this->values AS $value) {
                $deck[] = new Card($color,$value);
                $this->deck = $deck;
            }
        }
    }

    /**
     * Set the value of deck
     *
     * @param array $deck
     *
     * @return self
     */
    public function getDeck() :array
    {
        return $this->deck;
    }

    /**
     * Set the value of deck
     *
     * @param array $deck
     *
     * @return self
     */
    public function setDeck(Array $deck) {
        $this->deck = $deck;
    }

    public function shuffleDeck()
    {
        return shuffle($this->deck);
    }
}