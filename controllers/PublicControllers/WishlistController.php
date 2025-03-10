<?php
require_once 'models/PublicModels/Wishlist.php';
require_once 'controllers/Controller.php';
class WishlistController extends Controller
{
    
    public function addToWishlist() {
        
        
       
    
        $user_id = '1';
        $product_id = $_POST['product_id'] ?? null;
    
        if (!$product_id) {
            die('Invalid request');
        }
    
        
        $wishlistModel = $this->model('wishlist');
       
            
            $wishlistModel->create([
                'user_id' => $user_id,
                'product_id' => $product_id
            ]);
            $_SESSION['message'] = "Added to Wishlist!";
        
    
        $this->redirect('/home');
    }
    




    public function showWishlist()
    {
        
       

        $userId = "1";
        $wishlistModel = new Wishlist();
        $wishlistItems = $wishlistModel->getUserWishlist($userId);

        // Render the wishlist view
        $this->render('public.wishlist.wishlist', ['wishlistItems' => $wishlistItems]);
    }






    public function destroy($id)
    {
        $wishlist = $this->model('wishlist');
        $wishlist->deleteFromWishlist($id);
        $this->redirect('/wishlist');
    }
    

    
}