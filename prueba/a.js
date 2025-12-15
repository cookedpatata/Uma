class objeto {
    constructor(atr1, atr2) {
        this.atr1 = atr1;
        this.atr2 = atr2;
    }
    get arr() {
        return `${this.atr2}`
    }
}

let arrobjs = [];
let objs = [
    { "atr1": "a", "atr2": [1, 2] },
    { "atr1": "b", "atr2": [3, 4] }
];
objs.forEach(obj => {
    let obj1 = new objeto(obj.atr1, obj.atr2)
    arrobjs.push(obj1)
});

let arrarr = [];
arrobjs.map(a => {
    arrarr.push(a.atr2)
})
//SON LO MISMO
arrobjs.forEach(obj => {
    for (atr in obj) {
        if (atr == "atr2")
            arrarr.push(obj[atr])
    }
});


