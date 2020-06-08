<h1>Créateur de Tierlist</h1>
<input type="text" class="title_create" placeholder="Titre" id="tl_title" required><br>
<div class="create" id="tablewrap">
    <table id="tier-table">
        <tbody">
            <tr>
                <td class="labelHolder" contenteditable="true" spellcheck="false" style="background: rgb(255, 127, 127);">S</td>
                <td><div class="tier sort" id="rows"></div></td>
                <td>
                    <div id="moveButtons">
                        <a class="chevrons"><i class="fas fa-chevron-up fa-2x"></i></a>
                        <a class="chevrons"><i class="fas fa-chevron-down fa-2x"></i></a>
                    </div>
                    <a><i class="fas fa-cog fa-2x"></i></a>
                </td>
            </tr>
            <tr><td class="labelHolder" contenteditable="true" spellcheck="false" style="background: rgb(255, 191, 127);">A</td>
                <td><div class="tier sort" id="rows"></div></td>
                <td>
                    <div id="moveBUttons">
                        <a class="chevrons"><i class="fas fa-chevron-up fa-2x"></i></a>
                        <a class="chevrons"><i class="fas fa-chevron-down fa-2x"></i></a>
                    </div>
                    <a><i class="fas fa-cog fa-2x"></i></a>
                </td></tr>
            <tr><td class="labelHolder" contenteditable="true" spellcheck="false" style="background: rgb(255, 223, 127);">B</td>
                <td><div class="tier sort" id="rows"></div></td>
                <td>
                    <div id="moveBUttons">
                        <a class="chevrons"><i class="fas fa-chevron-up fa-2x"></i></a>
                        <a class="chevrons"><i class="fas fa-chevron-down fa-2x"></i></a>
                    </div>
                    <a><i class="fas fa-cog fa-2x"></i></a>
                </td></tr>
            <tr><td class="labelHolder" contenteditable="true" spellcheck="false" style="background: rgb(255, 255, 127);">C</td>
                <td><div class="tier sort" id="rows"></div></td>
                <td>
                    <div id="moveBUttons">
                        <a class="chevrons"><i class="fas fa-chevron-up fa-2x"></i></a>
                        <a class="chevrons"><i class="fas fa-chevron-down fa-2x"></i></a>
                    </div>
                    <a><i class="fas fa-cog fa-2x"></i></a>
                </td></tr>
            <tr><td class="labelHolder" contenteditable="true" spellcheck="false" style="background: rgb(191, 255, 127);">D</td>
                <td><div class="tier sort" id="rows"></div></td>
                <td>
                    <div id="moveBUttons">
                        <a class="chevrons"><i class="fas fa-chevron-up fa-2x"></i></a>
                        <a class="chevrons"><i class="fas fa-chevron-down fa-2x"></i></a>
                    </div>
                    <a><i class="fas fa-cog fa-2x"></i></a>
                </td></tr>
        </tbody>
    </table>
</div>

<span id="clickme">Click ici</span>
<form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search">
      <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
    </form>
<div id="overlay">
    <div class="pop_up">
        <i class="far fa-window-close"></i>
        <p>Selectionnez la couleur souhaitée: </p>
        <div id="colors"></div>
    </div>

</div>