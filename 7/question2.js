class Car {
    constructor(gass,num) {
        this.gass = gass;
        this.num = num;
    }
    getNumGas() {
        console.log(`ガソリンは${this.gass}です。ナンバーは${this.num}です`);
    }
}
let model_1 = new Car("○○", "△△");
model_1.getNumGas();