const arr = [1,2,3,4,5,6];
const newArr = arr.map(double);

function double(item, index, array){
    console.log("item:" + item + "index:" + index + "array:" + array);

    return item * 2;
}

console.log(newArr);

const products = [
    {
        id: 1,
        nome: 'Produto A',
        price: 124,
        quantity: 3
    },
    {
        id: 2,
        nome: 'Produto B',
        price: 424,
        quantity: 13
    },
    {
        id: 3,
        nome: 'Produto C',
        price: 824,
        quantity: 30
    }
];

const buscaID = products.map((product) => product.price);
buscaID2 = products.map((product) => {
    if(product.id === 1){
        return {
            id: product.id,
            name: product.nome,
            total_prod: product.price * product.quantity,
        }
    }
    return {
        id: product.id,
        name: product.nome,
        total_prod: product.price * product.quantity,
    }
});

buscaID3 = products.map(function(product) {
    console.log(this.getMonth());
}, new Date());
console.log(buscaID3);