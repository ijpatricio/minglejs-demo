import React, {useState} from 'react'
import {motion} from 'framer-motion'

function HelloWorld({wire, ...props}) {

    const [usersAmount, setUsersAmount] = useState('')

    wire.countUsers().then((response) => {
        setUsersAmount(response)
    })

    const message = props.initialData.message

    return (
        <motion.div
            whileHover={{scale: 1.2}}
            whileTap={{scale: 1.1}}
            drag="x"
            dragConstraints={{left: -200, right: 200}}
        >
            <div className="my-10 bg-lime-300 rounded-xl p-4 text-2xl text-center">
                <div className="text-indigo-500">
                    <h2>React Component in Laravel</h2>
                </div>
                <div className="card-body"> <p>Users found: {usersAmount}</p> </div>
                <div className="card-body"> <p>Initial data: {message}</p> </div>
            </div>
        </motion.div>
    )
}

export default HelloWorld
