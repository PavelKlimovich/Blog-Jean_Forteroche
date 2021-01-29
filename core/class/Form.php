<?php

class Form
{
    private function input($type, $name, $label)
    {
        return "<div class=\"form-group\">
        <input required class=\"form-control\" id=\"$name\" name=\"$name\" type=\"$type\" placeholder=\"$label\">
    </div>";
    }

    public function text($name, $label)
    {
        echo $this->input('text', $name, $label);
    }

    public function email($name, $label)
    {
        echo $this->input('email', $name, $label);
    }

    public function textarea($name, $label)
    {
        echo "<div class=\"form-group\">
        <textarea required class=\"form-control\" id=\"$name\" name=\"$name\" placeholder=\"$label\"
        style=\"margin-top: 0px; margin-bottom: 0px; height: 252px;\"></textarea></div>";
    }
}
