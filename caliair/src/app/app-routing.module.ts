import { NgModule } from "@angular/core";

import { Routes, RouterModule } from '@angular/router';
import { HomeComponent } from "./paginas/home/home.component";
import { AboutComponent} from "./paginas/about/about.component";
import { MedicionesComponent } from "./paginas/mediciones/mediciones.component";


const app_routes: Routes = [
  { path: 'home', component: HomeComponent},
  { path: 'about', component: AboutComponent},
  { path: 'mediciones', component: MedicionesComponent},
  { path: '**', pathMatch: 'full', redirectTo: 'home'}

];

@NgModule({
  imports: [
    RouterModule.forRoot(app_routes, {useHash: true})
  ],
  exports: [
    RouterModule
  ]
})
export class AppRoutingModule{ }
