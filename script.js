window.onload = () => {
    const button = document.querySelector('button[data-action="change"]');
    button.innerText = '+';
    renderPlaces();
};

var models = [
    {
        url: './assets/magnemite/scene.gltf',
        scale: '0.1 0.1 0.1',
        info: 'Magnemite, Lv. 5, HP 10/10',
        rotation: '0 180 0',
        position: '0.15 -0.5 3'
    },
    {
        url: './assets/charmander/model.gltf',
        scale: '2 2 2',
        rotation: '0 180 0',
        info: 'Charmander',
        position: '0.15 -0.5 3'
    },
    {
        url: './assets/dragonite/scene.gltf',
        scale: '0.005 0.002 0.005',
        rotation: '0 180 0',
        info: 'Dragonite, Lv. 99, HP 150/150',
        position: '0.15 -0.5 3'
    },
];

var modelIndex = 0;
var setModel = function (model, entity) {
    if (model.scale) {
        entity.setAttribute('scale', model.scale);
    }

    if (model.rotation) {
        entity.setAttribute('rotation', model.rotation);
    }

    if (model.position) {
        entity.setAttribute('position', model.position);
    }

    entity.setAttribute('gltf-model', model.url);
    entity.setAttribute('animation-mixer', '');
    entity.setAttribute('crossOrigin','anonymous');
    const div = document.querySelector('.instructions');
    div.innerText = model.info;
};

function renderPlaces() {
    let scene = document.querySelector('a-scene');
    let model = document.createElement('a-entity');

    setModel(models[modelIndex], model);

    document.querySelector('button[data-action="change"]').addEventListener('click', function () {
        var entity = document.querySelector('[gltf-model]')
        modelIndex++;
        var newIndex = modelIndex % models.length;
        setModel(models[newIndex], entity);
    });

        scene.appendChild(model);
    // });
}