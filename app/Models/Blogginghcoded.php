<?php

    namespace App\Models;

    class Blogging{
        public static function all(){
            return [
                [
                    'id' => 1,
                    'categories' => 'fruit. fitness',
                    'title' => 'Antioxidant in fruit',
                    'description' => 'loremloremloremloremloremlorem',
                    'author' => 'Princr kay',
                    'qualification' => 'MSc'

                ],


                [
                    'id' => 2,
                    'categories' => 'Guava. fitness',
                    'title' => 'Antioxidant in fruit',
                    'description' => 'loremloremloremloremloremlorem',
                    'author' => 'Princr kay',
                    'qualification' => 'MSc'

                ],

                [
                    'id' => 2,
                    'categories' => 'Guava. fitness',
                    'title' => 'Antioxidant in fruit',
                    'description' => 'loremloremloremloremloremlorem',
                    'author' => 'Princr kay',
                    'qualification' => 'MSc'

                ],

                [
                    'id' => 2,
                    'categories' => 'Guava. fitness',
                    'title' => 'Antioxidant in fruit',
                    'description' => 'loremloremloremloremloremlorem',
                    'author' => 'Princr kay',
                    'qualification' => 'MSc'

                ],
                [
                    'id' => 2,
                    'categories' => 'Guava. fitness',
                    'title' => 'Antioxidant in fruit',
                    'description' => 'loremloremloremloremloremlorem',
                    'author' => 'Princr kay',
                    'qualification' => 'MSc'

                ],
                [
                    'id' => 2,
                    'categories' => 'Guava. fitness',
                    'title' => 'Antioxidant in fruit',
                    'description' => 'loremloremloremloremloremlorem',
                    'author' => 'Princr kay',
                    'qualification' => 'MSc'

                ],
                

                [
                    'id' => 3,
                    'categories' => '2uava. fitness',
                    'title' => '2Antioxidant in fruit',
                    'description' => '2loremloremloremloremloremlorem',
                    'author' => '2Princr kay',
                    'qualification' => '2MSc'

                ]
                ];

        }



        public static function find($id){
            $blogging = self::all();
    
            foreach($blogging as $blog){
                if($blog['id'] == $id){
                    return $blog;
                }
            }
        }
    }


 


?>