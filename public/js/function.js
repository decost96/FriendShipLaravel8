function jugador (){
    var anchoPersonaje = 64;
    var altoPersonaje = 64;
    var posicionX = (renderer.width/2)-(anchoPersonaje/2);
    var posicionY = (renderer.height-altoPersonaje)-20;
    var rectangle = new Graphics();
    rectangle.lineStyle(4, 0xFF3300, 1);
    rectangle.beginFill(0x66CCFF);
    rectangle.drawRect(0, 0, anchoPersonaje, altoPersonaje);
    rectangle.endFill();
    rectangle.x = posicionX;
    rectangle.y = posicionY;
    rectangle.vx = 0;
    rectangle.vy = 0;
    return rectangle;
}

//Creando Enemigos
let consecutivoEnemigos=0;
function boots(){
    consecutivoEnemigos++;
    var anchoPersonaje = 64;
    var altoPersonaje = 64;
    var posx = randomInt(0,renderer.width - anchoPersonaje); 
    enemigos[consecutivoEnemigos] = new Graphics();
    enemigos[consecutivoEnemigos].lineStyle(4, 0xFF3300, 1);
    enemigos[consecutivoEnemigos].beginFill(0xfff);
    enemigos[consecutivoEnemigos].drawRect(0, 0, anchoPersonaje, altoPersonaje);
    enemigos[consecutivoEnemigos].endFill();
    enemigos[consecutivoEnemigos].x = posx;     
    enemigos[consecutivoEnemigos].vy = 0;   
    enemigos[consecutivoEnemigos].interactive = true; 
    enemigos[consecutivoEnemigos].alpha = 1;
    return enemigos[consecutivoEnemigos];   
}

//Creando enemigos aleatorios
function randomInt(min, max) {
    return Math.floor(Math.random() * (max - min + 1)) + min;
}

// Funcion que permite analizar la colision de algun objeto, la proveee pixijs
function hitTestRectangle(r1, r2) { 
    //Define the variables we'll need to calculate
    let hit, combinedHalfWidths, combinedHalfHeights, vx, vy; 
    //hit will determine whether there's a collision
    hit = false; 
    //Find the center points of each sprite
    r1.centerX = r1.x + r1.width / 2;
    r1.centerY = r1.y + r1.height / 2;
    r2.centerX = r2.x + r2.width / 2;
    r2.centerY = r2.y + r2.height / 2; 
    //Find the half-widths and half-heights of each sprite
    r1.halfWidth = r1.width / 2;
    r1.halfHeight = r1.height / 2;
    r2.halfWidth = r2.width / 2;
    r2.halfHeight = r2.height / 2; 
    //Calculate the distance vector between the sprites
    vx = r1.centerX - r2.centerX;
    vy = r1.centerY - r2.centerY; 
    //Figure out the combined half-widths and half-heights
    combinedHalfWidths = r1.halfWidth + r2.halfWidth;
    combinedHalfHeights = r1.halfHeight + r2.halfHeight; 
    //Check for a collision on the x axis
    if (Math.abs(vx) < combinedHalfWidths) { 
      //A collision might be occurring. Check for a collision on the y axis
      if (Math.abs(vy) < combinedHalfHeights) { 
        //There's definitely a collision happening
        hit = true;
      } else {
  
        //There's no collision on the y axis
        hit = false;
      }
    } else {
  
      //There's no collision on the x axis
      hit = false;
    }
  
    //`hit` will be either `true` or `false`
    return hit;
};

//Funcion para reconocer el teclado, ya lo provee PIXI js, 

function keyboard(value) {
    let key = {};
    key.value = value;
    key.isDown = false;
    key.isUp = true;
    key.press = undefined;
    key.release = undefined;
    //The `downHandler`
    key.downHandler = event => {
      if (event.key === key.value) {
        if (key.isUp && key.press) key.press();
        key.isDown = true;
        key.isUp = false;
        event.preventDefault();
      }
    };
  
    //The `upHandler`
    key.upHandler = event => {
      if (event.key === key.value) {
        if (key.isDown && key.release) key.release();
        key.isDown = false;
        key.isUp = true;
        event.preventDefault();
      }
    };
  
    //Attach event listeners
    const downListener = key.downHandler.bind(key);
    const upListener = key.upHandler.bind(key);
    
    window.addEventListener(
      "keydown", downListener, false
    );
    window.addEventListener(
      "keyup", upListener, false
    );
    
    // Detach event listeners
    key.unsubscribe = () => {
      window.removeEventListener("keydown", downListener);
      window.removeEventListener("keyup", upListener);
    };
    
    return key;
}