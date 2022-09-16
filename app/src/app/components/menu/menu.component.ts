import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-menu',
  templateUrl: './menu.component.html',
  styleUrls: ['./menu.component.css']
})
export class MenuComponent implements OnInit {

  constructor() { }

  ngOnInit(): void {

  //menu animation
  //@ts-ignore
  require('../../../assets/scripts/smarty-menu-animations.js')

  }

}
