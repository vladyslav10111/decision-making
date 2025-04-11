<?php

namespace Vladyslav10111\DecisionMaking;

class FormRenderer
{
    public function render(): string
    {
        return '
            <form method="POST" onsubmit="return validateInput()">
                <label for="options">Введіть варіанти (через кому):</label>
                <input type="text" name="options" id="options" required maxlength="500" onpaste="return false;">
                <button type="submit">Обрати</button>
            </form>
        ';
    }
}
