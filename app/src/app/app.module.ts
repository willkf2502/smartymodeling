import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';

import { AppComponent } from './app.component';
import { MenuComponent } from './components/menu/menu.component';
import { TooltipModule } from 'ngx-bootstrap/tooltip';
import { MaintabsComponent } from './components/maintabs/maintabs.component';

@NgModule({
  declarations: [
    AppComponent,
    MenuComponent,
    MaintabsComponent
  ],
  imports: [
    BrowserModule,
    TooltipModule.forRoot()
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
