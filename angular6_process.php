// React Js :- https://www.youtube.com/watch?v=mydtSbgC8Cg&list=PLpdiIovPfYaS4iUQOtm-sBoNz0TEe6GXh&index=42

//Admin LTE Theme with laravel
https://www.youtube.com/results?search_query=how+to+install+laravel+with+adminlte+theme+using+command+prompt
https://www.youtube.com/watch?v=2I4Zmt-BBB8
https://www.youtube.com/watch?v=rVLWXA1tnVY
user for 
@NgModule this is called for decorator

side name :- truecodex.com 

Install node js 
check node js version 
- node -v

check npm version
- npm -v


install angular 6
- npm install -g @angular/cli
- ng --version
- ng
- ng new ng6 --style=scss --routing (create the project)
- cd ng6
- ng serve -o 
  or 
- ng serve --open  
//** Create a components****//
- ng generate component sidebar (ng g c sidebar)
- ng g c posts
- ng g c users
- ng g c details

//** Create a Modules****//
- ng generate Module students (ng g m students)
- ng g m students-dashboard
- ng g m courses

//** Create a Directives****//
- ng generete directive highlight ( ng g d highlight)

//** Create a Services****//
- ng generate service data

//** Create a Pipes****//
- ng generete pipe factorial ( ng g p factorial)


//** Create a Class****//
- ng generete class Contact

Install animation libarary 
- npm install @angular/animations@latest --save

on create the build

- ng build
- ng build --prod

/////////////////////////////////
Import app.module.ts file
import { SidebarComponent } from './sidebar/sidebar.component';
import { PostsComponent } from './posts/posts.component';
import { UsersComponent } from './users/users.component';
import { DetailsComponent } from './details/details.component';

import { HttpClientModule } from '@angular/common/http';

@NgModule({
  declarations: [
    AppComponent,
    SidebarComponent,
    PostsComponent,
    UsersComponent,
    DetailsComponent
  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    HttpClientModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }


////////////////////////////////////////
import data.service.ts file
import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';

@Injectable({
  providedIn: 'root'
})
export class DataService {

  constructor(private http: HttpClient) { 

  	getyUsers(){
  	return this.http.get('https://jsonplaceholder.typicode.com/users')
  	}
  }
}

// **************** Start Property Binding ********************//
Properties binding:-
component.ts file :-

imageUrl = 'https://upload.wikimedia.org/wikipedia/commons/
thumb/3/33/Vanamo_Logo.png/600px-Vanamo_Logo.png';
  
isDisabled = true;

use for component.html 
this is a binding for capital brakets 
binding use for 
like this (true, false , 1 , 0 ) variable

<button [disabled]="isDisabled">Sign Up</button>

this is not binding 
use for curli brackets
<p>
  <img src="{{ imageUrl }}"/>
</p>
// **************** End Property Binding ********************//


// **************** Start Event Binding ********************//

Component.html file

<p>{{ count }}</p>
<p>
  <button (click) = "counter()">Counter</button>
</p>

Component.ts file

  count = 0;
  constructor() { }

  ngOnInit() {
  }

  counter() {
    this.count++;
  }

// **************** End Event Binding ********************//


// **************** Start Two Way Binding ********************//

two way binding use for runtime change the value
app.module.ts file
import this 
import { FormsModule} from '@angular/forms';

imports: [
    BrowserModule,
    AppRoutingModule,
    FormsModule
  ],

component.html file
<p>
  <input [(ngModel)]="name">
</p>

{{name}}

// **************** End Two Way Binding ********************//
  
// ************ Start Input And Output Properties **************//
 // Input Properties for use parent to child component //

  Parent Componet (<app-user></app-user>)
  <!-- user.component.ts -->
  user ='Dharmendra solanki';

  <!-- user.component.html -->
  <app-user-detail[user]="user"></app-user-detail>


  Child Componet (<app-user-detail></app-user-detail>)
  <!-- user-detail.component.ts  (@input() is called for decorator)-->
  @input() user ;


  <!-- user-detail.component.html -->
  <p>{{ user }}</p>


 Parent Componet (<app-user></app-user>)

// OutPut Properties //

<!-- user.component.ts -->
  getMessage(msg:string){
  this.msg = msg;
}


<!-- user.component.html -->
  <app-user-detail(message)="getMessage($event)"></app-user-detail>


Child Componet (<app-user-detail></app-user-detail>)
  <!-- user-detail.component.ts  (@input() is called for decorator)-->
  @output() message = new EventEmitter<string>();
  
  setMessage(msg:string){
  this.message.emit(msg);
}

  <!-- user-detail.component.html -->
  <button (click)="setMessage('Hello')">Message</button>

  


// ************ Start Input And Output Properties **************//



//********** Reference Variable Parent interacts with child  *************//

Reference variable define on #(has) on html


//****  Built in Attribute Directives NgClass NgStyle NgModel  ********//

Directives :-
There are three kinds of directives in Angular

1. Components :- directives withe a template 

2. Attribute directives :- change the appearance or behavior of and element, component, or another directives.

3. Structural Dircetives :- change the DOM layout by adding and removing DOM elements. 


Buitl-in Attribute Directives :-
1. ngClass :- Yo can adding and removing CSS classes dynamically.

2. ngStyle :- You can set inline styles dynamically.

3. ngModel :- When developing data entry forms , you often both display a data property and update that property when the user makes changes.



//*************  Create a Custom Attribute Directive**************//


//*******Structural Directives NgIf NgFor NgSwitch ********//

Structural Directive :-
Structural directives are responsible for HTML layout. They shape or reshape the DOM's structure, typically by adding, removing, or manipulating elements.

Three of the common , built-in structurall directives
1. Ngif :- conditionally add or remove an element from the DOM 

2. NgFor :- Repeat a template for each item in a list

3. NgSwitch :- A set of directives that switch among altrenative views

//************ Pipes Operators *********//
Transform data into Date, Currency, Uppercase, Lowercase , JSON, etc.

//****** Create Custom Pipes (Factorial) ********//

- ng generate pipe factorial

// ******** Create Reactive Forms using FormControl, FormGroup and FormBuilder ****//

//*******Create Template Driven Forms*******//
