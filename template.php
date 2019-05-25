    
<?php
    class template
    {
        private $tags = [];
        private $template;
        public function __construct($templateFile)
        {
            $this->template = $this->getFile($templateFile);
            if(!$this->template) {
                return "Error! Can't load the template file $templateFile";
            }
        }
        public function render()
        {
            $this->replaceTags();
            echo $this->template;
        }
        public function assign($tag, $value)
        {
            $this->tags[$tag] = $value;
        }
        public function getFile($file)
        {
            if(file_exists($file))
            {
                $file = file_get_contents($file);
                return $file;
            }
        }
        private function replaceTags()
        {
            foreach ($this->tags as $tag => $value) {
                $this->template = str_replace('{'.$tag.'}', $value, $this->template);
            }
            return true;
        }
    }
    ?>