<?php
    class SearchDTORequest{
        private $search;
        public function setSearch($searchh){
            $this->search = $searchh;
        }
        public function getSearch() 
        {
            return $this->search;
        }
    }