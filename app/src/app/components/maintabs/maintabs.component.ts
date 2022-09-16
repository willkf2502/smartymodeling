import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-maintabs',
  templateUrl: './maintabs.component.html',
  styleUrls: ['./maintabs.component.css']
})
export class MaintabsComponent implements OnInit {

  constructor() { }

  ngOnInit(): void {
    var toggler = document.getElementsByClassName("caret");
    var i;
    // @ts-ignore
    for (i = 0; i < toggler.length; i++) {
      toggler[i].addEventListener("click", function() {
        // @ts-ignore
        this.parentElement.querySelector(".nested").classList.toggle("activated");
        
        // @ts-ignore
        this.classList.toggle("caret-down");
      });
}
  }

}
