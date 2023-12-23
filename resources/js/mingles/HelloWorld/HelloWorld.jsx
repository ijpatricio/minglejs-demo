import React from 'react'
import {motion} from 'framer-motion'

function HelloWorld({wire, ...props}) {

    return (
        <motion.div
            whileHover={{scale: 1.2}}
            whileTap={{scale: 1.1}}
            drag="x"
            dragConstraints={{left: -100, right: 100}}
        >
            <div className="mt-5 text-2xl text-center">
                <div className="text-indigo-500">
                    <h2>React Component in Laravel</h2>
                </div>
                <div className="card-body">Woohoo let's go!!</div>
            </div>
        </motion.div>
    )
}

export default HelloWorld
