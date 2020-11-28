const recipes = document.querySelector('.recipes');

document.addEventListener('DOMContentLoaded', function() {
  // nav menu
  const menus = document.querySelectorAll('.side-menu');
  M.Sidenav.init(menus, {edge: 'right'});
  // add recipe form
  const forms = document.querySelectorAll('.side-form');
  M.Sidenav.init(forms, {edge: 'left'});

  var styleTag = document.createElement("style");
  styleTag.innerHTML = `	.mediaViewInfo {
		--web-view-name: UI JS;
		--web-view-id: UI_JS;
		--web-scale-on-resize: true;
		--web-enable-deep-linking: true;
	}
	:root {
		--web-view-ids: UI_JS;
	}
	* {
		margin: 0;
		padding: 0;
		box-sizing: border-box;
		border: none;
	}
	#UI_JS {
		position: relative;
		height: auto;
		overflow: hidden;
		--web-view-name: UI JS;
		--web-view-id: UI_JS;
		--web-scale-on-resize: true;
		--web-enable-deep-linking: true;
		margin: 8px 8px 0px 8px;
	}
	#Rectangle_444 {
		fill: rgba(255,255,255,1);
	}
	.Rectangle_444 {
		filter: drop-shadow(0px 1px 2px rgba(90, 90, 90, 0.251));
		position: absolute;
		overflow: visible;
		width: 99%;
		height: 99%;
		padding-left: 7px;
		padding-top: 8px;
	}
	#Recipe_Title {
		left: 125px;
		top: 11px;
		position: absolute;
		overflow: visible;
		width: 344px;
		height: 22px;
		text-align: left;
		font-family: Arial;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(0,0,0,1);
		letter-spacing: -0.03px;
	}
	#Description {
		margin-left: 125px;
		margin-right: 47px;
		margin-top: 39px;
		margin-bottom: 24px;
		position: relative;
		overflow: visible;
		text-align: left;
		font-family: Arial;
		font-style: normal;
		font-weight: normal;
		font-size: 12px;
		color: rgba(0,0,0,1);
		min-height: 30px;
	}
	#dish {
		position: absolute;
		width: 94px;
		height: 62.667px;
		left: 15px;
		top: 16px;
		overflow: visible;
	}
	#Delete:hover {
		width: 15.073px;
		height: 17.129px;
		right: 20.927px;
		bottom: 12.871px;
	}
	#Delete {
		position: absolute;
		width: 11px;
		height: 12.5px;
		right: 23px;
		bottom: 15.5px;
		overflow: visible;
		cursor: pointer;
		transition: all .3s ease-out;
	}`;
  document.head.insertAdjacentElement('beforeend', styleTag);
});

// render recipe data
const renderRecipe = (data, id) => {

  var html = `<div id="UI_JS" class="recipe" data-id="${id}">
	<svg class="Rectangle_444">
		<rect id="Rectangle_444" rx="8" ry="8" x="0" y="0" width="99%" height="99%">
		</rect>
	</svg>
	<div id="Recipe_Title">
		<span>${data.name}</span>
	</div>
	<div id="Description">
		${data.ingredients}
	</div>
	<img id="dish" src="img/dish.png" srcset="img/dish.png 1x, img/dish@2x.png 2x">
		
	<img id="Delete" class="delete" src="img/Delete.png" srcset="img/Delete.png 1x, img/Delete@2x.png 2x" data-id="${id}">
		
</div>`;
  recipes.innerHTML += html;

};

// remove recipe
const removeRecipe = (id) => {
  const recipe = document.querySelector(`.recipe[data-id=${id}]`);
  console.log(recipe)
  recipe.remove();
};