<?php



namespace App\Controller;



use App\Controller\AppController;



class ArticlesController extends AppController {
    public   function   index  () {
        //... by George P. Corser
        
        // die('hey'); // for debugging
        
        $this->loadComponent('Paginator');
        
        $articles = $this->Paginator->paginate($this->Articles->find()); // variable holds all articles
        
        $this->set('articles', $articles); // used by view
        
    }
}
