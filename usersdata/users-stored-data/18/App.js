import React from 'react'
import { BrowserRouter, Routes ,Route } from 'react-router-dom';
import SignIn from './Components/Signin';
import Features from './Components/Features';
import SignUp from './Components/Signup';
import Album from './Components/Album';
import Error from './Components/Error';
import ReactDOM from 'react-dom';

function App() {

    

  return (
<>
<BrowserRouter>
    <Routes>
        <Route path='/' element={<Album/>}></Route>
        <Route path='/home' element={<Album/>}></Route>
        <Route path='/features' element={<Features/>}></Route>
        <Route path='/signin' element={<SignIn/>}></Route>
        <Route path='/signup' element={<SignUp/>}></Route>
        <Route path="*" element={<Error/>}></Route>
  </Routes>
  </BrowserRouter>
</>
    )
}

export default App