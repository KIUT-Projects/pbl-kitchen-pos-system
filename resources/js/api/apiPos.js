import httpReq from "../functions/httpRequest";

class apiPos {

    // PAGES
    getProducts(data = {}){
        return httpReq.post('/products', data);
    }
    getProduct(data = {}){
        return httpReq.post('/product/{data.id}', data);
    }

    sendOrder(data = {}){
        return httpReq.post('/order/store', data);
    }

}

export default new apiPos();
