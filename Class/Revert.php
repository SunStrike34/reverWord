<?php

class Revert
{
    /**
     * Изменет порядок букв в тексте
     * @param string $str
     * @return string
     */
    public function revertCharacters(string $str): string
    {
        $splitString = explode(' ', $str); // Разбить строку на массив

        foreach ($splitString as $key => $elem) { // Перебрать массив
            $splitString[$key] = $this->revertWord($elem); // Изменить порядок букв в элементе массива
        }

        return implode(' ', $splitString); // Обеденить элементы массива в строку через пробел
    }

    /**
     * Изменет порядок букв в слове
     * @param string $word
     * @return string
     */
    private function revertWord(string $word): string
    {
        $wordInArray = str_split($word); // Преобразовать строку в массив
        $revArray = str_split(mb_strtolower(preg_replace('/\pP/iu', '', $word))); // Преобразовать строку в массив, без знаков пинктуации и реверсировать порядок элементов
        $count = count($revArray) - 1; // количество элементов реверсированого массива

        for ($elem = 0; $elem < count($wordInArray); $elem++) { // Меребрать массив
            if (ctype_punct($wordInArray[$elem])) continue; // Если элемент является знаком пунктуации, пропустить итерацию массива

            if (ctype_upper($wordInArray[$elem])) { // Если элемент массива в верхнем регистре
                $wordInArray[$elem] = strtoupper($revArray[$count]); // Заменить на элемент в верхнем регистере
            } else {
                $wordInArray[$elem] = $revArray[$count]; // Заменить элемент
            }

            $count--;
        }

        return implode($wordInArray); // Вернуть массив обедененый в строку
    }
}
