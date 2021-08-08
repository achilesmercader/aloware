/**
 * Comment model
 */

class Comment {

    /**
     * Show all coments via axios
     */
    static all() {

        return axios.get('/comments');

    }


}

export default Comment;