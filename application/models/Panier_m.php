<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: Vincent
 * Date: 12/11/2015
 * Time: 02:11
 */

/**
 * Class Cart_m
 */
class Cart_m extends CI_Model
{
    /**
     * Add an article in the cart
     * @param $cart
     */
    public function addToCart($cart) {
        return $this->db->insert("panier", $cart);
    }

    /**
     * Remove all article from the cart
     * @param $cartId
     */
    public function clearCart($cartId) {
        // DELETE PANIER
        // FROM PANIER
        // WHERE id_commande = NULL
        // AND id_user = id;
        // TODO
    }

    /**
     * Return an array of the cart
     * @param $userId
     */
    public function getCart($userId) {
        $this->db->select('id_produit, quantite, prix,
        dateAjoutPanier');
        $this->db->where('id_user', $userId);
        $this->db->from('panier');
        $query = $this->db->get();
        return $query->result();
    }

    /**
     * Remove a specific article from the cat
     * @param $articleId
     */
    public function removeArticle($articleId) {
        // DELETE PANIER
        // FROM PANIER
        // WHERE idUser = id_user
        // AND articleID = id_produit;
        // TODO
    }

    /**
     * Update the cart
     * @param cart
     */
    public function update($cart) {
        // TODO
    }
}