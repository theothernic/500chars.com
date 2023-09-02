<?php
    namespace App\View\Components\Messages;

    use Illuminate\View\Component;
    use Illuminate\View\View;

    class Alert extends Component
    {
        public string $type = '';
        public string $text = '';

        public function __construct(string $type = '', string $text = '')
        {
            $this->type = $type;
            $this->text = $text;
        }


        public function render(): View
        {
            return view('components.messages.alert');
        }
    }
