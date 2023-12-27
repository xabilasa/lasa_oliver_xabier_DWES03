class Order {
    constructor(username) {
        this.username = username;
        this.id = this.generateID();
        this.shippingData = [];
        this.bookTitles = [];
        this.totalPrice = '';
    }

    generateID() {
        const currentDate = new Date();
        return this.username + '_' + currentDate.getTime();
    }

    addShippingData(shippingData) {
        this.shippingData.push(shippingData);
    }

    addBookTitle(bookTitle) {
        this.bookTitles.push(bookTitle);
    }

    setTotalPrice(totalPrice) {
        this.totalPrice = totalPrice;
    }

    toJSON() {
        return JSON.stringify(this);
    }
}